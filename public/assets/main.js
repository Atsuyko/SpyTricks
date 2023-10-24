function selected_country(country) {
  var contacts = document.getElementsByClassName('contacts');
  var hideouts = document.getElementsByClassName('hideouts');

  for (const contact in contacts) {

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

function selected_target(target_country) {
  var agents = document.getElementsByClassName('agents');
  var targets = document.getElementsByClassName('targets');

  for (const agent in agents) {
    if ((agents[agent].id == target_country) && (agents[agent].disabled == false)) {
      agents[agent].disabled = true;
      agents[agent].checked = false;

    } else if ((agents[agent].id == target_country) && (agents[agent].disabled == true)) {
      agents[agent].disabled = false;

    } else {

    }
  }

  for (const target in targets) {

    if ((targets[target].checked == false)) {

      for (const agent in agents) {

        if ((agents[agent].id == targets[target].id) && (agents[agent].disabled == true)) {
          agents[agent].disabled = false;
        }
      }
    }
  }
}
