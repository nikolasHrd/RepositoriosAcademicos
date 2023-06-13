from kivy.clock import Clock

def yield_to_sleep(func):
    def wrapper(*args, **kwargs):
        gen = func(*args, **kwargs)
        def next_step(*args):
            try:
                t = next(gen)
            except StopIteration:
                pass
            else:
                Clock.schedule_once(next_step, t or 1)
            next_step()

        