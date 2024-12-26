function saveSelection() {
    var dropdown = document.getElementById('dropdown');
    var selectedValue = dropdown.options[dropdown.selectedIndex].value;
    alert('Selected option: ' + selectedValue);
    // You can save the selected value in a database or perform other actions here
  }
  