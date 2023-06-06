document.getElementById("calendarButton").addEventListener("click", function() {
    var calendarContainer = document.getElementById("calendarContainer");
    if (calendarContainer.style.display === "none") {
      calendarContainer.style.display = "block";
      $("#calendarContainer").datepicker({
        onSelect: function(date) {
          $("#selectedDate").text(date); // Muestra la fecha seleccionada en un elemento con el id "selectedDate"
          calendarContainer.style.display = "none"; // Cierra el calendario
        }
      });
    } else {
      calendarContainer.style.display = "none";
    }
  });
  