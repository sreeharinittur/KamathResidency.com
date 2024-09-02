<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Google Fonts and Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body, html {
            height: 100%;
            font-family: 'Roboto', sans-serif;
            color: #333;
            background-color: #fff;
            scroll-behavior: smooth;
        }
        .main-content, .chart-container, .feedback-panel {
    padding: 20px;
    margin-bottom: 20px;
}
.dropdown-menu a {
    padding: 10px 20px;
    background-color: #4e342e;
    color: #fff;
    transition: background-color 0.3s;
}

.dropdown-menu a:hover {
    background-color: #3e2723;
}

.form-group {
    padding: 10px;
    background-color: #fff3e0; /* Soft brownish background */
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}
.main-content {
    opacity: 0;
    animation: fadeIn 1s forwards;
}

@keyframes fadeIn {
    to {
        opacity: 1;
    }
}
.chart-container {
    background-color: #fff3e0; /* Soft brownish background */
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

        .nav-wrapper {
            background-color: #4e342e; /* Dark brown */
        }
        .nav-wrapper .brand-logo.center {
    position: relative;
    left: auto;
    transform: none;
    text-align: center;
    width: 100%;
}

        .brand-logo {
            font-weight: bold;
            color: #fff;
        }
        .sidebar {
            height: 100vh;
            background-color: #3e2723; /* Even darker brown */
            overflow-y: auto;
        }
        
        
        /* Sidebar Background and Text Color */
.sidebar {
    background-color: #2c3e50; /* Muted dark color */
    color: #ecf0f1; /* Light text color */
    height: 100vh;
    width: 250px;
    padding-top: 20px;
    box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
}

/* Sidebar Link and Icon Alignment */
.sidebar .waves-effect {
    display: flex;
    align-items: center;
    padding: 10px 20px;
    color: #ecf0f1; /* Ensure the text is readable */
    transition: background-color 0.3s, color 0.3s;
}

.sidebar .waves-effect i {
    margin-right: 15px;
    font-size: 24px;
}

/* Sidebar Hover Effect */
.sidebar .waves-effect:hover {
    background-color: #34495e; /* Slightly lighter dark shade */
    color: #fff; /* White text on hover */
}

/* Sidebar Header for Collapsible Sections */
.sidebar .collapsible-header {
    font-weight: bold;
    color: #ecf0f1;
    padding: 10px 20px;
    border-bottom: 1px solid #34495e;
}

/* Sidebar User Information */
.sidebar .user-view .name,
.sidebar .user-view .email {
    margin-left: 20px;
    margin-bottom: 10px;
    color: #bdc3c7; /* Light gray color */
}

/* Sidebar Scrollbar Styling */
.sidebar::-webkit-scrollbar {
    width: 5px;
}

.sidebar::-webkit-scrollbar-thumb {
    background-color: #34495e;
    border-radius: 10px;
}

.sidebar::-webkit-scrollbar-track {
    background-color: #2c3e50;
}

/* Active Link Highlight */
.sidebar .active {
    background-color: #1abc9c; /* Soft green to highlight active links */
    color: #fff;
}

        .logout {
            cursor: pointer;
            color: #fff;
        }
        .nav-wrapper .brand-logo.center {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }
        .main-content {
            margin-left: 300px;
            padding: 20px;
        }
        .feedback-panel {
            max-height: 300px;
            overflow-y: scroll;
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .feedback-message {
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
        }
        .feedback-message span {
            margin-left: 10px;
        }
        .positive { background-color: #dff0d8; } /* Greenish background */
        .neutral { background-color: #fcf8e3; } /* Yellowish background */
        .negative { background-color: #f2dede; } /* Reddish background */
        .chart-container {
            margin-top: 20px;
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #4e342e;
            border-color: #4e342e;
        }
        .btn-primary:hover {
            background-color: #3e2723;
            border-color: #3e2723;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo center">CONTROL DESK</a>
                <ul class="right">
                    <li>
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
                            <a href="{{ route('logout') }}" class="logout" @click.prevent="$root.submit();">
                                <i class="material-icons">exit_to_app</i> Log Out
                            </a>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <ul id="slide-out" class="sidenav sidenav-fixed sidebar">
        <li><a href="{{ url('create_room') }}" class="waves-effect"><i class="material-icons">add</i> Create Room</a></li>
        <li><a href="{{ url('view_rooms') }}" class="waves-effect"><i class="material-icons">visibility</i> View Rooms</a></li>
        <li><a href="{{ route('bookings') }}" class="waves-effect"><i class="material-icons">event</i> Bookings</a></li>
        
        <li> <a href="{{ route('admin.messages') }}" class="waves-effect"><i class="material-icons">message</i>New Messages</a><li>

    </ul>

    <main class="main-content">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownRooms" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Rooms
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownRooms">
                            <a class="dropdown-item" href="{{ url('view_rooms') }}">View Rooms</a>
                            <a class="dropdown-item" href="{{ url('create_room') }}">Add Rooms</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('bookings') }}">Booking</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <h4 class="animate__animated animate__fadeIn">Analytics Dashboard</h4>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="yearSelect">Select Year</label>
                        <select id="yearSelect" class="form-control">
                            <option value="2024">2024</option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="monthSelect">Select Month</label>
                        <select id="monthSelect" class="form-control">
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            <option value="6">June</option>
                            <option value="7">July</option>
                            <option value="8">August</option>
                            <option value="9">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <button id="showFlow" class="btn btn-primary animate__animated animate__fadeIn">Show Flow</button>
        <div class="chart-container animate__animated animate__fadeIn">
            <canvas id="bookingsChart" width="400" height="200"></canvas>
        </div>
        <div class="feedback-panel animate__animated animate__fadeIn">
            <h5>User Feedback</h5>
            <div id="feedbackMessages">
                <!-- Feedback messages will be dynamically inserted here -->
            </div>
        </div>
    </main>

    <!-- Materialize JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- jQuery and Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        M.Sidenav.init(elems);

        var yearSelect = $('#yearSelect');
        var monthSelect = $('#monthSelect');
        var showFlowButton = $('#showFlow');
        var bookingsChart = document.getElementById('bookingsChart').getContext('2d');
        var chartInstance = null;

        function fetchData() {
            var year = yearSelect.val();
            var month = monthSelect.val();
            $.ajax({
                url: '{{ route('fetch.bookings.data') }}',
                type: 'GET',
                data: {
                    year: year,
                    month: month
                },
                success: function(response) {
                    if (chartInstance) {
                        chartInstance.destroy();
                    }

                    var roomIds = response.roomIds;
                    var bookingCounts = response.bookingCounts;

                    chartInstance = new Chart(bookingsChart, {
                        type: 'bar',
                        data: {
                            labels: roomIds,
                            datasets: [{
                                label: 'Bookings',
                                data: bookingCounts,
                                backgroundColor: '#8d6e63', /* Light brown */
                            }]
                        },
                        options: {
                            responsive: true,
                            scales: {
                                xAxes: [{
                                    gridLines: {
                                        color: '#e0e0e0'
                                    }
                                }],
                                yAxes: [{
                                    gridLines: {
                                        color: '#e0e0e0'
                                    },
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }
                    });
                }
            });
        }

        
        showFlowButton.click(function() {
            fetchData();
        });

        // Fetch feedback when the page loads
        fetchFeedback();
    });
    </script>
</body>
</html>
