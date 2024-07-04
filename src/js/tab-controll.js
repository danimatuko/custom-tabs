function openTab(event, tabId) {
  // Hide all tab contents
  let tabcontents = document.getElementsByClassName('tabcontent')
  for (let i = 0; i < tabcontents.length; i++) {
    tabcontents[i].classList.remove('active')
  }

  // Deactivate all tab buttons
  let tablinks = document.getElementsByClassName('tablinks')
  for (let i = 0; i < tablinks.length; i++) {
    tablinks[i].classList.remove('active')
  }

  // Show the clicked tab content
  document.getElementById(tabId).classList.add('active')

  // Activate the clicked tab button
  event.currentTarget.classList.add('active')
}
