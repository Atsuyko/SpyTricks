function selected_country(country) {
  var contacts = document.getElementsByClassName('contacts');
  var hideouts = document.getElementsByClassName('hideouts');

  console.log(contacts)


  for (const contact in contacts) {

    console.log(contacts[contact])

    if (contacts[contact].id == country) {
      contacts[contact].disabled = false;
    } else {
      contacts[contact].disabled = true;
      contacts[contact].checked = false;
    }
  }

  for (const hideout in hideouts) {
    if (hideouts[hideout].id == country) {
      hideouts[hideout].disabled = false;
    } else {
      hideouts[hideout].disabled = true;
      hideouts[hideout].checked = false;
    }
  }
}