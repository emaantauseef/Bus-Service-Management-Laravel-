<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Ticket Management System</title>
    <style>
        header {
            padding: 156px 0 100px;
        }

        section {
            padding: 150px 0;
        }
    </style>
</head>

<body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>


    <nav id="navbar-example2" class="navbar navbar-dark bg-dark px-3 fixed-top">
        <a class="navbar-brand" href="#">BUS BOOKING SYSTEM</a>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="#scrollspyHeading2">About PIA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#scrollspyHeading3">Company Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#scrollspyHeading5">Latest News</a>
            </li>
            <li class="nav-item dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    LogIn
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Admin</a>
                    <a class="dropdown-item" href="#">User</a>
                </div>
            </li>
        </ul>
    </nav>
    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example"
        tabindex="0">
        <header class="bg-primary text-white">
            <div class="container text-center">
                <h4 id="scrollspyHeading1">TICKET BOOKING SYSTEM</h4>
                <p class="lead">PIA - Ticket Booking System</p>
            </div>
        </header>

        <section id="scrollspyHeading2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2>About Pakistan International Airlines</h2>
                        <p>Pakistan International Airlines is an international airline that serves as the national flag
                            carrier of Pakistan under the administrative control of the Secretary to the Government of
                            Pakistan for Aviation. Its central hub is Karachi's Jinnah International Airport, while
                            Allama Iqbal International Airport in Lahore and Islamabad International Airport serve as
                            secondary hubs.</p>
                        <p class="lead">PIA is Pakistan's largest airline and operates a fleet of 30+ aircraft. The
                            airline operates nearly 100 flights daily, servicing 18 domestic destinations and 25
                            international destinations across Asia, Europe, the Middle East and North America.</p>

                    </div>
                </div>
            </div>
        </section>


        <section id = "scrollspyHeading3" class="bg-light">
            <div class="container">
              <div class="row">
                <div class="col-lg-8 mx-auto">
                  <h2>Company Profile</h2>
                  <hr />
        <p><strong>Vision</strong><br />
        PIA’s vision is to be a world class profitable airline meeting customer expectation through excellent services, on-time performance, innovative products and absolute safety.</p>
                     <hr />
        <p><strong>Mission</strong><br />
        Employee teams will contribute towards making PIA a global airline of choice through:
        <ul>
            <li>Offering quality customer services and innovative products.</li>
            <li>Using state-of-the-art technologies.</li>
            <li>Ensuring cost-effective measures in procurement and operations.</li>
            <li>Developing Safety Culture.</li>
        </ul>
        </p>
                  <hr />
        <p><strong>Core Values</strong><br />
        <ul>
            <li>Customer Expectations</li>
            <li>Service</li>
            <li>Innovation</li>
            <li>Cohesiveness</li>
            <li>Integrity</li>
            <li>Reliability</li>
            <li>Safety</li>
            <li>Social Responsibility</li>
        </ul>
        </p>
                </div>
              </div>
            </div>
          </section>


          <section id = "scrollspyHeading5">
            <div class="container">
              <div class="row">
                <div class="col-lg-8 mx-auto">
                  <h2>Latest News</h2>
          <ul>
                    <li>Pakistan Airlines suspends Afghan operations citing Taliban interference Pakistan Airlines suspends Afghan operations citing Taliban interference.</li>
                    <li>PIA plane 'held back' by Malaysian authorities over UK court case: Airline spokesman</li>
                    <li>Turbulence faced by Pakistan's national air carrier reflects state of Pak economy</li>
                    <li>PIA clears 110 pilots out of 141 whose licences were suspended</li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
    </div>




    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif


</body>

</html>



