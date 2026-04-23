function toggleExpandedCard(cardId) {
// Get the clicked expanded card
var expandedCard = document.getElementById('expanded' + cardId);

// If the expanded card is already visible, hide it (for the back button)
if (expandedCard.style.display === 'flex') {
    expandedCard.style.display = 'none';
} else {
    // Hide all other expanded cards
    var expandedCards = document.querySelectorAll('.expandedcard');
    expandedCards.forEach(function(card) {
        card.style.display = 'none';
    });

    // Show the clicked expanded card
    expandedCard.style.display = 'flex';
}
}
