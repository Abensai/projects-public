let results, roundResult, currentPlayer, currentPlaying;

init();

document.querySelector('.btn-roll').addEventListener('click', function() {
    if(currentPlaying) {

        let dice = Math.floor(Math.random() * 6) + 1;

        let diceDOM = document.querySelector('.dice');
        diceDOM.style.display = 'block';
        diceDOM.src = 'images/dice-' + dice + '.png';

        if (dice !== 1) {
            roundResult += dice;
            document.querySelector('#current-' + currentPlayer).textContent = roundResult;
        } else {
            nextPlayer();
        }
    }    
});

document.querySelector('.btn-hold').addEventListener('click', function() {
    if (currentPlaying) {
        results[currentPlayer] += roundResult;

        document.querySelector('#score-' + currentPlayer).textContent = results[currentPlayer];

        if (results[currentPlayer] >= 100) {
            document.querySelector('#name-' + currentPlayer).textContent = 'Winner!';
            document.querySelector('.dice').style.display = 'none';
            document.querySelector('.player-' + currentPlayer + '-panel').classList.add('winner');
            document.querySelector('.player-' + currentPlayer + '-panel').classList.remove('active');
            currentPlaying = false;
        } else {
            nextPlayer();
        }
    }
});

function nextPlayer() {
    currentPlayer === 0 ? currentPlayer = 1 : currentPlayer = 0;
    roundResult = 0;

    document.getElementById('current-0').textContent = '0';
    document.getElementById('current-1').textContent = '0';

    document.querySelector('.player-0-panel').classList.toggle('active');
    document.querySelector('.player-1-panel').classList.toggle('active');

    document.querySelector('.dice').style.display = 'none';
}

document.querySelector('.btn-new').addEventListener('click', init);

function init() {
    results = [0, 0];
    currentPlayer = 0;
    roundResult = 0;
    currentPlaying = true;
    
    document.querySelector('.dice').style.display = 'none';

    document.getElementById('score-0').textContent = '0';
    document.getElementById('score-1').textContent = '0';
    document.getElementById('current-0').textContent = '0';
    document.getElementById('current-1').textContent = '0';
    document.getElementById('name-0').textContent = 'Player 1';
    document.getElementById('name-1').textContent = 'Player 2';
    document.querySelector('.player-0-panel').classList.remove('winner');
    document.querySelector('.player-1-panel').classList.remove('winner');
    document.querySelector('.player-0-panel').classList.remove('active');
    document.querySelector('.player-1-panel').classList.remove('active');
    document.querySelector('.player-0-panel').classList.add('active');
}









