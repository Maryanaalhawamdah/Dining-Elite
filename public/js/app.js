import './bootstrap';
document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault();
    const searchQuery = document.querySelector('input[type="search"]').value;
    console.log('Search query:', searchQuery);
    // Add your code to handle the search query here
});