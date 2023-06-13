import random
from kivy.app import App
from kivy.uix.button import Button
from kivy.uix.widget import Widget


class SortWidget(Widget):
    
    def __init__(self, **kwargs):
        super().__init__(**kwargs)

        self.number = []
        self.button = []
        layout = self.ids['layout_button']

        for i in range(12):
            n = random.randint(1, 20)
            self.number.append(n)
            button = Button(text=str(n))
            self.button.append(button)
            layout.add_widget(button)


class InterfaceWidget(Widget):
    def __init__(self, **kwargs):
        super().__init__(**kwargs)
        self.add_widget(SortWidget())


class WorkshopApp(App):
    def build(self):
        return InterfaceWidget()


if __name__ == "__main__":
    app = WorkshopApp()
    app.run()
