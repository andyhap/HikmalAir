const bookedSeats = ['3A', '7C', '10E', '15F'];

document.addEventListener('DOMContentLoaded', function() {
    const leftSeatsContainer = document.getElementById("left-seats");
    const rightSeatsContainer = document.getElementById("right-seats");

    function createSeatElement(row, col) {
        const seat = document.createElement("div");
        seat.className = "seat";
        const seatCode = `${row}${col}`;

        seat.dataset.seatId = seatCode;

        seat.textContent = seatCode;

        if (bookedSeats.includes(seatCode)) {
            seat.classList.add("booked");
            seat.title = "Kursi sudah dipesan";
        } else {
            seat.addEventListener("click", () => {
                seat.classList.toggle("selected");
                updateSelectedSeatsInput();
            });
        }
        return seat;
    }

    function generateSeats() {
        for (let row = 1; row <= 17; row++) {
            ['A', 'B', 'C'].forEach(col => leftSeatsContainer.appendChild(createSeatElement(row, col)));
            ['D', 'E', 'F'].forEach(col => rightSeatsContainer.appendChild(createSeatElement(row, col)));
        }
    }

    function updateSelectedSeatsInput() {
        let currentSelectedSeats = [];
        document.querySelectorAll('.seat.selected').forEach(seatElement => {
            currentSelectedSeats.push(seatElement.dataset.seatId);
        });
        document.getElementById('selectedSeatsInput').value = JSON.stringify(currentSelectedSeats);
        console.log("Input tersembunyi diupdate:", document.getElementById('selectedSeatsInput').value);
    }

    generateSeats();

    const form = document.getElementById('seatSelectionForm');
    form.addEventListener('submit', function(event) {
        updateSelectedSeatsInput();
    });
});
