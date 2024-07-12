
<!DOCTYPE html>
<html>
<head>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    @vite('resources/css/app.css')

    <style>
       body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .sidebar {
            display: flex;
            flex-direction: column;
            gap: 20px;
            position: fixed;
            top: 0;
            left: 0;
            width: 20%;
            height: 100%;
            background-color: #333;
            color: #fff;
            padding: 20px;
            box-sizing: border-box;
            overflow-y: auto;

        }
        .background {
            width: 100%;
            height: 61%;
            filter: brightness(15%);
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
        }
        img {
            box-shadow: 0 0 10px rgba(27, 26, 26, 0.5);
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .header img {
            width: 100px;
            display: block;
            margin: 0 auto;
        }

        .header h1, .header p {
            text-align: center;
            margin: 0;
        }

        .header h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .header p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .header button {
            display: block;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #ff6347;
            color: #fff;
            cursor: pointer;
        }

        .details {
            margin-top: 50px;
            display: flex;
            flex-direction: column;
            gap: 25px;
        }
        .details div {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .content {
            /* margin-left: 30%; Adjust according to sidebar width */
            padding: 20px;
            box-sizing: border-box;
        }
        .poster_image{
            width: 50%;
            height: 250px;
            display: flex;  
            justify-content: center;
            align-items: center;
            margin: 60px auto;
        }
        .poster_image img{
            width: 100%;
            height: 100%;
        }   

        body {
    font-family: Arial, sans-serif;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 0;
    padding: 20px;
}

.screen-container {
    position: relative;
    width: 80%;
    margin-bottom: 20px;
    text-align: center;
}

.screen {
    width: 700px;
    height: 10px;
    border-bottom: 5px solid #ffd700; /* Yellow color */
    border-radius: 50%/100px 100px 0 0; /* Curved line */
}

.screen-text {
    position: absolute;
    top: -25px;
    width: 700px;
    text-align: center;
    font-weight: bold;
    color: #ffd700; /* Yellow color */
}

.seating-chart {
    display: grid;
    grid-template-columns: repeat(12, 50px);
    gap: 10px;
}

.seat {
    width: 50px;
    height: 50px;
    background-color: #ffecb3; /* Default to libre color */
    border: 2px solid #d5a03d;
    border-radius: 10px;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    transition: transform 0.2s, background-color 0.2s, border-color 0.2s;
}

.seat:hover {
    transform: scale(1.1);
    background-color: #ffdf80; /* Slightly darker yellow on hover */
    border-color: #d5a03d;
}

.seat::before {
    content: '';
    position: absolute;
    width: 30px;
    height: 15px;
    background-color: #ffecb3;
    border: 2px solid #d5a03d;
    border-radius: 5px;
    top: 5px;
}

.seat::after {
    content: '';
    position: absolute;
    width: 40px;
    height: 15px;
    background-color: #ffecb3;
    border: 2px solid #d5a03d;
    border-radius: 5px;
    bottom: 5px;
}

.seat.selected {
    background-color: #c0e7a8; /* Green for selected */
    border-color: #83a342;
}

.seat.selected::before,
.seat.selected::after {
    background-color: #c0e7a8;
    border-color: #83a342;
}

.seat.selected:hover {
    background-color: #a8d98f; /* Slightly darker green on hover */
    border-color: #83a342;
}

.seat.occupied {
    background-color: #d3d3d3; /* Grey for occupied */
    border-color: #8c8c8c;
}

.seat.occupied::before,
.seat.occupied::after {
    background-color: #d3d3d3;
    border-color: #8c8c8c;
}

.seat.occupied:hover {
    transform: none; /* No scale on hover for occupied seats */
    background-color: #d3d3d3;
    border-color: #8c8c8c;
}

.seat.vip {
    background-color: #fff700; /* Different yellow for VIP */
    border-color: #b2a800;
}

.seat.vip::before,
.seat.vip::after {
    background-color: #fff700;
    border-color: #b2a800;
}

.seat.vip:hover {
    background-color: #ffd800; /* Slightly darker yellow on hover */
    border-color: #b2a800;
}

.seat.vip.selected {
    background-color: #c0e7a8; /* Green for selected VIP */
    border-color: #83a342;
}

.seat.vip.selected::before,
.seat.vip.selected::after {
    background-color: #c0e7a8;
    border-color: #83a342;
}

.seat.vip.selected:hover {
    background-color: #a8d98f; /* Slightly darker green on hover for selected VIP */
    border-color: #83a342;
}

.legend {
    display: flex;
    gap: 20px;
    margin-top: 20px;
}

.legend-item {
    display: flex;
    align-items: center;
    gap: 10px;
}

.legend-item .seat {
    width: 30px;
    height: 30px;
    cursor: default;
    transition: none; /* No transition for legend items */
}

.legend-item span {
    font-size: 14px;
}
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 300px;
}

.close-btn {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close-btn:hover,
.close-btn:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

    /* Ensure the submit button is centered */
    #submit-btn {
        margin-top: 20px;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
    }
    </style>
</head>
<body>
    @php
        function formatDate($inputDate) {
            $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
            $daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
            $dateParts = explode('-', trim($inputDate));
            $year = (int)$dateParts[0];
            $monthIndex = (int)$dateParts[1] - 1; 
            $day = (int)$dateParts[2];
            $date = new DateTime();
            $date->setDate($year, $monthIndex + 1, $day);
            $dayOfWeek = $daysOfWeek[$date->format('w')];
            $month = $months[$date->format('n') - 1];
            $paddedDay = str_pad($day, 2, '0', STR_PAD_LEFT);
            $formattedDate = "$dayOfWeek $paddedDay $month $year";
            return $formattedDate;
        }
    @endphp
    <div class="sidebar" >
        <div class="background">
            <img src="{{$movie->poster_image}}">
        </div>
        <div class="poster_image">
            <img src="{{$movie->poster_image}}">
        </div>
        <div class="header">
            <h1 style="font-weight:bolder; font-size: 24px; margin-bottom: 10px;">{{$movie->title}}</h1>
            <p>ENSIAS Cinemas</p>
            <div style="margin-bottom: 20px; width: 100%; display: flex; justify-content: center; gap: 10px;">
                <button style="width: 160px; padding: 10px; border: none;font-size: 13px; border-radius: 15px; background-color: #5d5d5d; color: #fff; cursor: pointer;" onclick="changeMovie()">Changer de film</button>
            </div>
        </div>
        <div class="details" style="border-top: 1px solid #848484; border-opacity:0.5; border-bottom: 1px solid #fff; padding: 20px; box-sizing: border-box;">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <div style="display: flex; gap: 10px;flex-direction: column;">
                    <div style="opacity:0.5">Cinéma:</div>
                    <div>ENSIAS Cinemas</div>
                </div>
                <div>></div>
            </div>
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <div style="display: flex; gap: 10px;flex-direction: column;">
                    <div style="opacity:0.5">Date</div>
                    @foreach (array_keys($datetimearray) as $item)
                        <div>{{ formatDate($item) }}</div>
                    @endforeach
                </div>
                <div><i aria-hidden="true">></i></div>
            </div>
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <div style="display: flex; gap: 10px;flex-direction: column;">
                    <div style="opacity:0.5">Seance</div>
                    @foreach ($datetimearray as $item)
                        <div>{{$item[0]}}</div>
                    @endforeach
                </div>
                <div>></div>
            </div>
        </div>
    </div>
    <div style="display:flex ; justify-content:center ;  height:100%;width:100%; border-top:2px solid black ; border-bottom:2px solid black;padding-bottom:40px;margin-top:30px;">
        <div style="width: 20%"></div>
        <div class="content" style="margin-top:80px;  ">

            <div class="screen-container">
                <div class="screen"></div>
                <div class="screen-text">Écran</div>
            </div>
            <div class="seating-chart">
                <!-- JavaScript will generate the seats here -->
            </div>
            <div class="legend">
                <div class="legend-item">
                    <div class="seat libre"></div>
                    <span>Places libres</span>
                </div>
                <div class="legend-item">
                    <div class="seat selected"></div>
                    <span>Mes places</span>
                </div>
                
                <div class="legend-item">
                    <div class="seat vip"></div>
                    <span>Places VIP</span>
                </div>
            </div>
            <!-- Submit button -->
            <a id="submit-btn" class="hidden bg-black text-white rounded hover:bg-gray-800 transition duration-300 text-center" href="{{route('movies.payment')}}">Reserver Maintenant</a>
    
            <!-- Modal for reservation -->
          
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const seatingChart = document.querySelector('.seating-chart');
            const submitBtn = document.getElementById('submit-btn');
            const modal = document.getElementById('modal');
            const totalFee = document.getElementById('total-fee');
            const reserveBtn = document.getElementById('reserve-btn');
            const closeBtn = document.querySelector('.close-btn');
            const regularSeatPrice = 120;
            const vipSeatPrice = 200;
            let selectedSeats = [];

            const rows = 10; // Number of rows
            const cols = 12; // Number of columns per row

            // Generate seats
            for (let i = 0; i < rows; i++) {
                for (let j = 0; j < cols; j++) {
                    const seat = document.createElement('div');
                    seat.classList.add('seat');
                    if (i < 3) { // First 3 rows are VIP
                        seat.classList.add('vip');
                    }
                    seat.addEventListener('click', () => {
                        if (!seat.classList.contains('occupied')) {
                            seat.classList.toggle('selected');
                            updateSelectedSeats(seat);
                        }
                    });
                    seatingChart.appendChild(seat);
                }
            }

            function updateSelectedSeats(seat) {
                if (seat.classList.contains('selected')) {
                    selectedSeats.push(seat);
                } else {
                    selectedSeats = selectedSeats.filter(s => s !== seat);
                }

                if (selectedSeats.length > 0) {
                    submitBtn.style.display = 'block';
                } else {
                    submitBtn.style.display = 'none';
                }
            }

            submitBtn.addEventListener('click', () => {
                let total = 0;
                selectedSeats.forEach(seat => {
                    if (seat.classList.contains('vip')) {
                        total += vipSeatPrice;
                    } else {
                        total += regularSeatPrice;
                    }
                });
                totalFee.textContent = `Total Fee: $${total}`;
                modal.style.display = 'block';
            });

            closeBtn.addEventListener('click', () => {
                modal.style.display = 'none';
            });

            reserveBtn.addEventListener('click', () => {
                window.location.href = '{{route('movies.payment',1)}}';
            });

            window.addEventListener('click', (event) => {
                if (event.target === modal) {
                    modal.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>
