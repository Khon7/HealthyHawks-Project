
  // Get DOM elements
    const name = document.querySelector('#name');
    const nameEdit = document.querySelector('#name-edit');
    const nameSave = document.querySelector('#name-save');

  // Show edit name input on save button click
  nameSave.addEventListener('click', () => {
        name.style.display = 'none';
    nameEdit.style.display = 'inline-block';
  });

  // Save edited name on save button click
  nameSave.addEventListener('click', () => {
        name.textContent = nameEdit.value;
    name.style.display = 'inline-block';
    nameEdit.style.display = 'none';
  });