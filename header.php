<header class="bg-light border-bottom fixed-top">
        <div class="container">
            <div class="d-flex justify-content-between align-items-end py-2 flex-wrap">
                <div class="logo mb-2">
                    <img src="./assets/image/True-motor-logo.png" alt="True Motors Logo" height="40">
                </div>
                <div class="d-flex align-items-end flex-grow-1 justify-content-be">
                    <button class="navbar-toggler position-fixed fixed d-md-none p-1 ms-2" type="button" data-bs-toggle="collapse"
                        data-bs-target="#headerRightContent" aria-controls="headerRightContent" aria-expanded="false"
                        aria-label="Toggle navigation" style="width: 32px; height: 32px;">
                        <img src="assets/icon/justify.svg" alt="Menu" style="width: 24px; height: 24px;">
                    </button>
                    <div class="collapse d-md-flex flex-wrap align-items-center gap-5 ms-md-3 mt-2 mt-md-0 w-100 w-md-auto justify-content-md-end"
                        id="headerRightContent">
                        <div class="text-end flex-grow-1 flex-md-grow-0 min-w-0">
                            <small class="text-muted d-block">Call us at</small>
                            <span class="fw-bold">987-654-3210</span>
                        </div>
                        <img src="./assets/icon/notification.svg" alt="Notification" height="24">
                        <!-- <div class="text-center">
                            <a href="#" class="btn p-0">
                                <img src="./assets/icon/login.png" alt="Login Icon" height="30">
                            </a>
                            <p class="mb-0 small">Sri</p>
                        </div> -->
                        <div class="text-center">
                        <!-- <li><a href="login.php" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a></li> -->
                         <!-- <button id="loginBtn" class="btn-login">Login</button> -->
                           <button id="loginBtn" class="btn-login">Login</button>

                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-globe me-2"></i>
                            <select class="form-select form-select-sm d-inline w-auto border-0 shadow-none">
                                <option>English</option>
                                <option>Tamil</option>
                                <option>Hindi</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark head-nav border-top border-bottom">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a href="./Buyhome.php" class="nav-link text-white px-3">Buy Vehicle</a></li>
                        <li class="nav-item"><a href="./Sellhome.php" class="nav-link text-white px-3">Sell Vehicle</a></li>
                        <li class="nav-item"><a href="./compare_page.php" class="nav-link text-white px-3">Compare</a></li>
                        <li class="nav-item"><a href="./rental_page.php" class="nav-link text-white px-3">Rental</a></li>
                        <li class="nav-item"><a href="./Service1.php" class="nav-link text-white px-3">Vehicle Services</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-white px-3">Blogs & News</a></li>
                    </ul>
                    <div class="d-flex align-items-center">
                        <button id="toggleSearch" class="btn btn-link p-0 me-2" type="button">
                            <img src="./assets/icon/Search.png" alt="Search Icon" height="24">
                        </button>
                        <form id="searchForm" class="d-none d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search vehicles..." aria-label="Search">
                            <button class="btn btn-outline-light" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </header>