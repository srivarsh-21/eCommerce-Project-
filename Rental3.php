<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental page 3</title>
    <link rel="stylesheet" href="./Header_footerstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <style>

       .body-rental3{
          margin-top: 170px !important;
            background: #f5f5f5ff;
            margin-left: -20px !important;
       }


       .search-bar{
        width:1295px;
        height:131px;
       }
        .car-icon {
            width: 20px;
            height: 20px;
        }
        
        .car-rental-header {
    background: #FFFDFD;
    width: 100%;
    height: auto;
}
        .find-btn {
            background: #742B88;
            border: none;
            transition: all 0.2s ease;
        }
        
        .find-btn:hover {
            background: linear-gradient(135deg, #7c4daa, #6b3d99);
            transform: translateY(-1px);
        }
        
        .location-dot {
            width: 6px;
            height: 6px;
            background-color: #666;
            border-radius: 50%;
        }

       /* Filter bar */

        .sidebar {
            width: 100%;
            max-width: 400px;
            height: fit-content;
            margin-left: 0;
            background: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .filter-section {
            border: 1px solid #e5e5e5;
            background: white;
            overflow: hidden;
        }
        
        .filter-title {
            background: #fafafa;
            border-bottom: 1px solid #e5e5e5;
        }
        
        .filter-option input[type="checkbox"] {
            width: 18px;
            height: 18px;
            border: 2px solid #d1d5db;
            border-radius: 3px;
            appearance: none;
            cursor: pointer;
            position: relative;
            background: white;
            transition: all 0.2s;
        }
        
        .filter-option input[type="checkbox"]:checked {
            background-color: #3b82f6;
            border-color: #3b82f6;
        }
        
        .filter-option input[type="checkbox"]:checked::after {
            content: '✓';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 12px;
            font-weight: bold;
        }

        .filter-value {
            background: #3b82f6;
            color: white;
            padding: 4px 8px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
        }

        .filter-value:hover {
            background: #2563eb;
        }

        .filter-option {
            cursor: pointer;
            transition: background-color 0.2s;
            border-radius: 4px;
            padding: 4px;
        }

        .filter-option:hover {
            background-color: #f8f9fa;
        }

        .btn:disabled {
            opacity: 0.6;
        }

        .no-filters-message {
            color: #6c757d;
            font-style: italic;
            text-align: center;
            padding: 8px 0;
        }

        .filter-count {
            background: #dc3545;
            color: white;
            border-radius: 50%;
            padding: 2px 6px;
            font-size: 10px;
            margin-left: 5px;
        }

        .remove-filter {
            cursor: pointer;
            margin-left: 4px;
        }

        .remove-filter:hover {
            opacity: 0.7;
        }

        .alert {
            border-radius: 8px;
        }

        /* .rightbar{
           
            margin-right: 100px;
        }
         */

        .rightbar {
    flex: 1;
    margin-left: 20px;
}
.main-content-row {
    display: flex;
    align-items: flex-start;
    gap: 20px;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

.search-bar {
    width: 100%;
    max-width: 1200px;
    height: auto;
    margin: 0 auto;
}
        .rating-circle {
            background: #28a745;
            color: white;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: bold;
        }
        
        .price-amount {
            font-weight: bold;
            color: #2196F3;
        }
        
        .car-image {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }
        
        .calendar-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: none;
            z-index: 1000;
        }

        .date-picker-calendar {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            display: none;
            z-index: 1001;
            width: 320px;
        }

        .calendar-header {
            padding: 20px;
            border-bottom: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .month-year-display {
            font-weight: bold;
            font-size: 18px;
        }

        .nav-button {
            background: none;
            border: none;
            font-size: 18px;
            cursor: pointer;
            padding: 5px 10px;
            border-radius: 4px;
        }

        .nav-button:hover {
            background: #f0f0f0;
        }

        .days-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 1px;
            padding: 20px;
        }

        .day-header {
            text-align: center;
            padding: 10px 5px;
            font-weight: bold;
            color: #666;
            font-size: 12px;
        }

        .calendar-day {
            text-align: center;
            padding: 10px 5px;
            cursor: pointer;
            border-radius: 4px;
            transition: background 0.2s;
        }

        .calendar-day:hover {
            background: #e3f2fd;
        }

        .calendar-day.selected {
            background: #742B88;
            color: white;
        }

        .calendar-day.disabled {
            color: #ccc;
            cursor: not-allowed;
        }

        .calendar-day.disabled:hover {
            background: transparent;
        }

        .calendar-actions {
            padding: 20px;
            border-top: 1px solid #eee;
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }

        .action-button {
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .cancel-button {
            background: #f5f5f5;
            color: #333;
        }

        .confirm-button {
            background: #742B88;
            color: white;
        }
        
        
         .other-cars {
            background: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .other-cars h2 {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #333;
        }
        
        .other-car-item {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        
        .other-car-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        
        .other-car-image {
            width: 80px;
            height: 60px;
            object-fit: cover;
            border-radius: 4px;
        }
        
        .other-car-info {
            flex: 1;
        }
        
        .other-car-name {
            font-weight: bold;
            font-size: 13px;
            color: #333;
            margin-bottom: 2px;
        }
        
        .other-car-type {
            font-size: 11px;
            color: #666;
            margin-bottom: 5px;
        }
        
        .other-car-details {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .other-car-rating {
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        .book-btn {
            background: #2196F3;
            color: white;
            border: none;
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 11px;
            cursor: pointer;
        }
        
        .base-price {
            font-size: 10px;
            color: #666;
            margin-top: 2px;
        }
    </style>
</head>
<body class="body-rental3">
    <?php
    include './header.php';
    ?>
    <!-- Rental Header -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8 mb-5 search-bar">
                <!-- <div class="car-rental-header text-white rounded-3 p-3 mb-4"> -->
                    <div class="d-flex align-items-center mb-3">
                        <span class="fw-bold me-3 text-dark fs-3">Rental - Car</span>
                        <!-- <i class="fas fa-car text-dark"></i> -->
                    </div>
                    
                    <!-- Search Form -->
                    <div class="row g-0 bg-white rounded-3 overflow-hidden">
                        <div class="col-md-3 border-end">
                            <div class="p-3 position-relative bg-white">
                                <label class="form-label small text-black fw-bolder label1">Pickup Location</label>
                                <input type="text" class="form-control border-0 bg-transparent ps-4" value="Coimbatore" readonly>
                            </div>
                        </div>
                        
                        <div class="col-md-3 border-end">
                            <div class="p-3 position-relative bg-white">
                                <label class="form-label small text-black fw-bolder">Pickup</label>
                                <input type="text" class="form-control border-0 bg-transparent" id="start-date" value="Sat 5 July 2025" readonly>
                                <i class="fas fa-calendar position-absolute" style="top: 35px; right: 20px; cursor: pointer;"></i>
                            </div>
                        </div>
                        
                        <div class="col-md-3 border-end">
                            <div class="p-3 position-relative bg-white">
                                <label class="form-label small text-black fw-bolder">Return</label>
                                <input type="text" class="form-control border-0 bg-transparent" id="end-date" value="Sun 6 July 2025" readonly>
                                <i class="fas fa-calendar position-absolute" style="top: 35px; right: 20px; cursor: pointer;"></i>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="h-100 d-flex align-items-center bg-white">
                                <button class="btn find-btn text-white fw-semibold h-50 w-75 rounded-4 ms-4" onclick="performSearch()">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Calendar Overlay -->
    <div id="calendar-overlay" class="calendar-overlay"></div>

    <!-- Calendar Popup -->
    <div id="date-picker-calendar" class="date-picker-calendar">
        <div class="calendar-header">
            <button id="previous-month" class="nav-button">&#8249;</button>
            <span id="month-year-display" class="month-year-display"></span>
            <button id="next-month" class="nav-button">&#8250;</button>
        </div>
        <div id="days-grid" class="days-grid"></div>
        <div class="calendar-actions">
            <button id="cancel-button" class="action-button cancel-button">Cancel</button>
            <button id="confirm-button" class="action-button confirm-button">Select</button>
        </div>
    </div>

    <!-- Main Content -->
    <!-- Replace the main content section with this -->
<div class="container-fluid">
    <div class="main-content-row">
        <!-- Sidebar with Filters -->
        <!-- Sidebar with Filters -->
    <div class="sidebar">
        <!-- Body Type Filter -->
        <div class="filter-section rounded-3 mb-4">
            <div class="filter-title fw-semibold p-3 d-flex justify-content-between align-items-center">
                <span>Body Type</span>
                <span id="bodyTypeCount" class="filter-count" style="display: none;">0</span>
            </div>
            <div class="p-3">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="filter-option d-flex align-items-center gap-2" data-filter-type="bodyType" data-filter-value="SUV">
                            <input type="checkbox" id="suv">
                            <label for="suv" class="form-label mb-0">SUV</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="filter-option d-flex align-items-center gap-2" data-filter-type="bodyType" data-filter-value="Sedan">
                            <input type="checkbox" id="sedan">
                            <label for="sedan" class="form-label mb-0">Sedan</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="filter-option d-flex align-items-center gap-2" data-filter-type="bodyType" data-filter-value="MUV">
                            <input type="checkbox" id="muv">
                            <label for="muv" class="form-label mb-0">MUV</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="filter-option d-flex align-items-center gap-2" data-filter-type="bodyType" data-filter-value="Hatchback">
                            <input type="checkbox" id="hatchback">
                            <label for="hatchback" class="form-label mb-0">Hatchback</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Fuel Type Filter -->
        <div class="filter-section rounded-3 mb-4">
            <div class="filter-title fw-semibold p-3 d-flex justify-content-between align-items-center">
                <span>Fuel Type</span>
                <span id="fuelTypeCount" class="filter-count" style="display: none;">0</span>
            </div>
            <div class="p-3">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="filter-option d-flex align-items-center gap-2" data-filter-type="fuelType" data-filter-value="Diesel">
                            <input type="checkbox" id="diesel">
                            <label for="diesel" class="form-label mb-0">Diesel</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="filter-option d-flex align-items-center gap-2" data-filter-type="fuelType" data-filter-value="Petrol">
                            <input type="checkbox" id="petrol">
                            <label for="petrol" class="form-label mb-0">Petrol</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="filter-option d-flex align-items-center gap-2" data-filter-type="fuelType" data-filter-value="Electric">
                            <input type="checkbox" id="electric">
                            <label for="electric" class="form-label mb-0">Electric</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Transmission Type Filter -->
        <div class="filter-section rounded-3 mb-4">
            <div class="filter-title fw-semibold p-3 d-flex justify-content-between align-items-center">
                <span>Transmission Type</span>
                <span id="transmissionCount" class="filter-count" style="display: none;">0</span>
            </div>
            <div class="p-3">
                <div class="d-flex flex-column gap-3">
                    <div class="filter-option d-flex align-items-center gap-2" data-filter-type="transmission" data-filter-value="Automatic">
                        <input type="checkbox" id="automatic">
                        <label for="automatic" class="form-label mb-0">Automatic</label>
                    </div>
                    <div class="filter-option d-flex align-items-center gap-2" data-filter-type="transmission" data-filter-value="Manual">
                        <input type="checkbox" id="manual">
                        <label for="manual" class="form-label mb-0">Manual</label>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Seating Capacity Filter -->
        <div class="filter-section rounded-3 mb-4">
            <div class="filter-title fw-semibold p-3 d-flex justify-content-between align-items-center">
                <span>Seating Capacity</span>
                <span id="seatingCapacityCount" class="filter-count" style="display: none;">0</span>
            </div>
            <div class="p-3">
                <div class="row g-3">
                    <div class="col-4">
                        <div class="filter-option d-flex align-items-center gap-2" data-filter-type="seatingCapacity" data-filter-value="4">
                            <input type="checkbox" id="seat4">
                            <label for="seat4" class="form-label mb-0">4</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="filter-option d-flex align-items-center gap-2" data-filter-type="seatingCapacity" data-filter-value="5">
                            <input type="checkbox" id="seat5">
                            <label for="seat5" class="form-label mb-0">5</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="filter-option d-flex align-items-center gap-2" data-filter-type="seatingCapacity" data-filter-value="6">
                            <input type="checkbox" id="seat6">
                            <label for="seat6" class="form-label mb-0">6</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="filter-option d-flex align-items-center gap-2" data-filter-type="seatingCapacity" data-filter-value="7">
                            <input type="checkbox" id="seat7">
                            <label for="seat7" class="form-label mb-0">7</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="filter-option d-flex align-items-center gap-2" data-filter-type="seatingCapacity" data-filter-value="9">
                            <input type="checkbox" id="seat9">
                            <label for="seat9" class="form-label mb-0">9</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Fuel Plan Filter -->
        <div class="filter-section rounded-3 mb-4">
            <div class="filter-title fw-semibold p-3 d-flex justify-content-between align-items-center">
                <span>Fuel Plan</span>
                <span id="fuelPlanCount" class="filter-count" style="display: none;">0</span>
            </div>
            <div class="p-3">
                <div class="d-flex flex-column gap-3">
                    <div class="filter-option d-flex align-items-center gap-2" data-filter-type="fuelPlan" data-filter-value="With Fuel">
                        <input type="checkbox" id="withFuel">
                        <label for="withFuel" class="form-label mb-0">With Fuel</label>
                    </div>
                    <div class="filter-option d-flex align-items-center gap-2" data-filter-type="fuelPlan" data-filter-value="Without Fuel">
                        <input type="checkbox" id="withoutFuel">
                        <label for="withoutFuel" class="form-label mb-0">Without Fuel</label>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Selected Filters Display -->
        <div class="bg-light rounded-3 p-3 mb-3">
            <h6 class="fw-semibold">Selected Filters:</h6>
            <div id="selectedFiltersDisplay">
                <div class="no-filters-message">No filters selected</div>
            </div>
        </div>
        
        <!-- Action Buttons -->
        <button class="btn btn-primary w-100 mb-2" id="applyBtn" disabled>
            Apply Filters
            <span id="totalFilterCount" class="filter-count" style="display: none;">0</span>
        </button>
        <button class="btn btn-outline-secondary w-100" id="clearBtn">Clear All Filters</button>
    </div>

        <!-- Main Content -->
        <div class="rightbar">
            <div class="mb-4">
                <h2 class="h4">Cars available in Coimbatore</h2>
            </div>
            
            <!-- Cars Grid -->
            <div class="row g-3 mb-5">
                <div class="col-md-6">
                    <div class="card h-100">
                        <img src="" class="card-img-top car-image" alt="Hyundai Grand i10 Nios sports">
                        <div class="card-body">
                            <h5 class="card-title">Hyundai Grand</h5>
                            <p class="card-text text-muted small">i10 Nios sports</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="rating-circle">4</div>
                                    <span class="small text-muted">Comfortable</span>
                                </div>
                                <div class="text-end">
                                    <div class="price-amount">₹1400/day</div>
                                    <div class="small text-muted">4.5/5</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card h-100">
                        <img src="https://via.placeholder.com/400x150/cccccc/666666?text=Car+Image" class="card-img-top car-image" alt="Hyundai Grand i10 Nios sports">
                        <div class="card-body">
                            <h5 class="card-title">Hyundai Grand</h5>
                            <p class="card-text text-muted small">i10 Nios sports</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="rating-circle">4</div>
                                    <span class="small text-muted">Comfortable</span>
                                </div>
                                <div class="text-end">
                                    <div class="price-amount">₹1400/day</div>
                                    <div class="small text-muted">4.5/5</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card h-100">
                        <img src="https://via.placeholder.com/400x150/cccccc/666666?text=Car+Image" class="card-img-top car-image" alt="Hyundai Grand i10 Nios sports">
                        <div class="card-body">
                            <h5 class="card-title">Hyundai Grand</h5>
                            <p class="card-text text-muted small">i10 Nios sports</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="rating-circle">4</div>
                                    <span class="small text-muted">Comfortable</span>
                                </div>
                                <div class="text-end">
                                    <div class="price-amount">₹1400/day</div>
                                    <div class="small text-muted">4.5/5</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card h-100">
                        <img src="https://via.placeholder.com/400x150/cccccc/666666?text=Car+Image" class="card-img-top car-image" alt="Hyundai Grand i10 Nios sports">
                        <div class="card-body">
                            <h5 class="card-title">Hyundai Grand</h5>
                            <p class="card-text text-muted small">i10 Nios sports</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="rating-circle">4</div>
                                    <span class="small text-muted">Comfortable</span>
                                </div>
                                <div class="text-end">
                                    <div class="price-amount">₹1400/day</div>
                                    <div class="small text-muted">4.5/5</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Other Cars Section -->
            <div class="other-cars">
                <h2>Other Cars</h2>
                
                <div class="other-car-item">
                    <img src="https://via.placeholder.com/80x60/cccccc/666666?text=Car" alt="Toyota Innova Crysta" class="other-car-image">
                    <div class="other-car-info">
                        <div class="other-car-name">Toyota</div>
                        <div class="other-car-type">Innova Crysta</div>
                        <div class="other-car-details">
                            <div class="other-car-rating">
                                <div class="rating-circle">4</div>
                                <span class="rating-text">Comfortable</span>
                                <div style="font-size: 11px; color: #666; margin-left: 5px;">4.5/5</div>
                            </div>
                        </div>
                    </div>
                    <div style="text-align: right;">
                        <div class="base-price">Base Price From</div>
                        <div class="price-amount">₹1400/day</div>
                        <button class="book-btn">Book this Car</button>
                    </div>
                </div>

                <div class="other-car-item">
                    <img src="https://via.placeholder.com/80x60/cccccc/666666?text=Car" alt="Toyota Innova Crysta" class="other-car-image">
                    <div class="other-car-info">
                        <div class="other-car-name">Toyota</div>
                        <div class="other-car-type">Innova Crysta</div>
                        <div class="other-car-details">
                            <div class="other-car-rating">
                                <div class="rating-circle">4</div>
                                <span class="rating-text">Comfortable</span>
                                <div style="font-size: 11px; color: #666; margin-left: 5px;">4.5/5</div>
                            </div>
                        </div>
                    </div>
                    <div style="text-align: right;">
                        <div class="base-price">Base Price From</div>
                        <div class="price-amount">₹1400/day</div>
                        <button class="book-btn">Book this Car</button>
                    </div>
                </div>

                <div class="other-car-item">
                    <img src="https://via.placeholder.com/80x60/cccccc/666666?text=Car" alt="Toyota Innova Crysta" class="other-car-image">
                    <div class="other-car-info">
                        <div class="other-car-name">Toyota</div>
                        <div class="other-car-type">Innova Crysta</div>
                        <div class="other-car-details">
                            <div class="other-car-rating">
                                <div class="rating-circle">4</div>
                                <span class="rating-text">Comfortable</span>
                                <div style="font-size: 11px; color: #666; margin-left: 5px;">4.5/5</div>
                            </div>
                        </div>
                    </div>
                    <div style="text-align: right;">
                        <div class="base-price">Base Price From</div>
                        <div class="price-amount">₹1400/day</div>
                        <button class="book-btn">Book this Car</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
            include './footer.php'
            ?>
<!-- jQuery CDN (required for your existing $(document).ready and other jQuery usage) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap JS Bundle (should be at the end of body) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="./header_footer.js"></script>
    <script>
        // Search Bar
        let currentDate = new Date();
        let selectedDate = null;
        let activeField = null;
        
        const months = ['January', 'February', 'March', 'April', 'May', 'June', 
                       'July', 'August', 'September', 'October', 'November', 'December'];
        const days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

        // Initialize calendar
        function init() {
            // Add event listeners to calendar icons
            document.querySelectorAll('.fa-calendar').forEach((icon, index) => {
                icon.addEventListener('click', function() {
                    activeField = index === 0 ? 'pickup' : 'return';
                    showCalendar();
                });
            });

            // Add event listeners to input fields
            document.getElementById('start-date').addEventListener('click', function() {
                activeField = 'pickup';
                showCalendar();
            });

            document.getElementById('end-date').addEventListener('click', function() {
                activeField = 'return';
                showCalendar();
            });

            // Calendar navigation
            document.getElementById('previous-month').addEventListener('click', function() {
                currentDate.setMonth(currentDate.getMonth() - 1);
                renderCalendar();
            });

            document.getElementById('next-month').addEventListener('click', function() {
                currentDate.setMonth(currentDate.getMonth() + 1);
                renderCalendar();
            });

            // Calendar actions
            document.getElementById('cancel-button').addEventListener('click', hideCalendar);
            document.getElementById('confirm-button').addEventListener('click', selectDate);
            document.getElementById('calendar-overlay').addEventListener('click', hideCalendar);
        }

        function showCalendar() {
            document.getElementById('calendar-overlay').style.display = 'block';
            document.getElementById('date-picker-calendar').style.display = 'block';
            renderCalendar();
        }

        function hideCalendar() {
            document.getElementById('calendar-overlay').style.display = 'none';
            document.getElementById('date-picker-calendar').style.display = 'none';
            selectedDate = null;
        }

        function renderCalendar() {
            const monthYear = document.getElementById('month-year-display');
            monthYear.textContent = `${months[currentDate.getMonth()]} ${currentDate.getFullYear()}`;

            const grid = document.getElementById('days-grid');
            grid.innerHTML = '';

            // Add day headers
            days.forEach(day => {
                const dayHeader = document.createElement('div');
                dayHeader.className = 'day-header';
                dayHeader.textContent = day;
                grid.appendChild(dayHeader);
            });

            // Get first day of month and number of days
            const firstDay = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);
            const lastDay = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0);
            const startDate = new Date(firstDay);
            startDate.setDate(startDate.getDate() - firstDay.getDay());

            const today = new Date();
            today.setHours(0, 0, 0, 0);

            // Create calendar days
            for (let i = 0; i < 42; i++) {
                const cellDate = new Date(startDate);
                cellDate.setDate(startDate.getDate() + i);

                const dayCell = document.createElement('div');
                dayCell.className = 'calendar-day';
                dayCell.textContent = cellDate.getDate();

                // Disable past dates
                if (cellDate < today) {
                    dayCell.classList.add('disabled');
                } else {
                    dayCell.addEventListener('click', function() {
                        // Remove previous selection
                        document.querySelectorAll('.calendar-day.selected').forEach(d => {
                            d.classList.remove('selected');
                        });
                        
                        // Add selection to clicked day
                        dayCell.classList.add('selected');
                        selectedDate = new Date(cellDate);
                    });
                }

                // Highlight different month days
                if (cellDate.getMonth() !== currentDate.getMonth()) {
                    dayCell.style.color = '#ccc';
                }

                grid.appendChild(dayCell);
            }
        }

        function selectDate() {
            if (!selectedDate) {
                alert('Please select a date');
                return;
            }

            const options = { weekday: 'short', day: 'numeric', month: 'long', year: 'numeric' };
            const formattedDate = selectedDate.toLocaleDateString('en-US', options);

            if (activeField === 'pickup') {
                document.getElementById('start-date').value = formattedDate;
            } else {
                document.getElementById('end-date').value = formattedDate;
            }

            hideCalendar();
        }

        // Search functionality
        function performSearch() {
            const pickupLocation = document.querySelector('.form-control[value="Coimbatore"]').value;
            const pickupDate = document.getElementById('start-date').value;
            const returnDate = document.getElementById('end-date').value;

            console.log('Search Parameters:', {
                location: pickupLocation,
                pickup: pickupDate,
                return: returnDate
            });
            
            alert(`Searching for cars:\nLocation: ${pickupLocation}\nPickup: ${pickupDate}\nReturn: ${returnDate}`);
        }

       
        // Filter  Functionality
// Add this JavaScript code to replace your existing filter functionality

// Sample car data - replace with your actual data source
var allCars = [
    {
        id: 1,
        name: "Hyundai Grand",
        model: "i10 Nios Sports",
        bodyType: "Hatchback",
        fuelType: "Petrol",
        transmission: "Manual",
        seatingCapacity: "5",
        fuelPlan: "Without Fuel",
        price: 1400,
        rating: 4.5,
        image: "https://via.placeholder.com/400x150/cccccc/666666?text=Hyundai+Grand"
    },
    {
        id: 2,
        name: "Toyota Innova",
        model: "Crysta",
        bodyType: "MUV",
        fuelType: "Diesel",
        transmission: "Automatic",
        seatingCapacity: "7",
        fuelPlan: "With Fuel",
        price: 2800,
        rating: 4.7,
        image: "https://via.placeholder.com/400x150/cccccc/666666?text=Toyota+Innova"
    },
    {
        id: 3,
        name: "Maruti Swift",
        model: "VXI",
        bodyType: "Hatchback",
        fuelType: "Petrol",
        transmission: "Automatic",
        seatingCapacity: "5",
        fuelPlan: "Without Fuel",
        price: 1200,
        rating: 4.3,
        image: "https://via.placeholder.com/400x150/cccccc/666666?text=Maruti+Swift"
    },
    {
        id: 4,
        name: "Honda City",
        model: "ZX CVT",
        bodyType: "Sedan",
        fuelType: "Petrol",
        transmission: "Automatic",
        seatingCapacity: "5",
        fuelPlan: "With Fuel",
        price: 2200,
        rating: 4.6,
        image: "https://via.placeholder.com/400x150/cccccc/666666?text=Honda+City"
    },
    {
        id: 5,
        name: "Mahindra XUV500",
        model: "W10",
        bodyType: "SUV",
        fuelType: "Diesel",
        transmission: "Manual",
        seatingCapacity: "7",
        fuelPlan: "With Fuel",
        price: 3200,
        rating: 4.4,
        image: "https://via.placeholder.com/400x150/cccccc/666666?text=Mahindra+XUV500"
    },
    {
        id: 6,
        name: "Tata Nexon",
        model: "EV",
        bodyType: "SUV",
        fuelType: "Electric",
        transmission: "Automatic",
        seatingCapacity: "5",
        fuelPlan: "Without Fuel",
        price: 2500,
        rating: 4.2,
        image: "https://via.placeholder.com/400x150/cccccc/666666?text=Tata+Nexon+EV"
    },
    {
        id: 7,
        name: "Hyundai Creta",
        model: "SX",
        bodyType: "SUV",
        fuelType: "Petrol",
        transmission: "Automatic",
        seatingCapacity: "5",
        fuelPlan: "With Fuel",
        price: 2600,
        rating: 4.5,
        image: "https://via.placeholder.com/400x150/cccccc/666666?text=Hyundai+Creta"
    },
    {
        id: 8,
        name: "Maruti Ertiga",
        model: "ZXI+",
        bodyType: "MUV",
        fuelType: "Petrol",
        transmission: "Manual",
        seatingCapacity: "7",
        fuelPlan: "Without Fuel",
        price: 1800,
        rating: 4.1,
        image: "https://via.placeholder.com/400x150/cccccc/666666?text=Maruti+Ertiga"
    }
];

var filteredCars = allCars.slice(); // Copy of all cars

$(document).ready(function() {
    var filterManager = {
        selectedFilters: {
            bodyType: [],
            fuelType: [],
            transmission: [],
            seatingCapacity: [],
            fuelPlan: []
        },

        init: function() {
            this.bindEvents();
            this.updateDisplay();
            this.renderCars(allCars); // Initially show all cars
        },

        bindEvents: function() {
            var self = this;

            $('.filter-option').off('click').on('click', function(e) {
                if ($(e.target).is('input[type="checkbox"]')) {
                    return;
                }
                e.preventDefault();
                
                var $this = $(this);
                var filterType = $this.attr('data-filter-type');
                var filterValue = $this.attr('data-filter-value');
                var $checkbox = $this.find('input[type="checkbox"]');

                $checkbox.prop('checked', !$checkbox.prop('checked'));
                self.toggleFilter(filterType, filterValue, $checkbox.prop('checked'));
            });

            $('.filter-option input[type="checkbox"]').off('change').on('change', function() {
                var $this = $(this);
                var $filterOption = $this.closest('.filter-option');
                var filterType = $filterOption.attr('data-filter-type');
                var filterValue = $filterOption.attr('data-filter-value');

                self.toggleFilter(filterType, filterValue, $this.prop('checked'));
            });

            $('#applyBtn').off('click').on('click', function() {
                self.applyFilters();
            });

            $('#clearBtn').off('click').on('click', function() {
                self.clearAllFilters();
            });

            $(document).off('click', '.remove-filter').on('click', '.remove-filter', function(e) {
                e.preventDefault();
                e.stopPropagation();
                var filterType = $(this).attr('data-filter-type');
                var filterValue = $(this).attr('data-filter-value');
                self.removeFilter(filterType, filterValue);
            });
        },

        toggleFilter: function(filterType, filterValue, isChecked) {
            if (isChecked) {
                if (this.selectedFilters[filterType].indexOf(filterValue) === -1) {
                    this.selectedFilters[filterType].push(filterValue);
                }
            } else {
                var index = this.selectedFilters[filterType].indexOf(filterValue);
                if (index > -1) {
                    this.selectedFilters[filterType].splice(index, 1);
                }
            }

            this.updateDisplay();
            this.updateFilterCounts();
        },

        removeFilter: function(filterType, filterValue) {
            var index = this.selectedFilters[filterType].indexOf(filterValue);
            if (index > -1) {
                this.selectedFilters[filterType].splice(index, 1);
            }

            $('.filter-option').each(function() {
                var $this = $(this);
                if ($this.attr('data-filter-type') === filterType && $this.attr('data-filter-value') === filterValue) {
                    $this.find('input[type="checkbox"]').prop('checked', false);
                    return false;
                }
            });

            this.updateDisplay();
            this.updateFilterCounts();
        },

        clearAllFilters: function() {
            var self = this;
            
            Object.keys(this.selectedFilters).forEach(function(key) {
                self.selectedFilters[key] = [];
            });

            $('.filter-option input[type="checkbox"]').prop('checked', false);

            this.updateDisplay();
            this.updateFilterCounts();
            
            // Show all cars when filters are cleared
            this.renderCars(allCars);

            this.showNotification('All filters cleared', 'success');
        },

        applyFilters: function() {
            var totalFilters = this.getTotalFilterCount();
            
            if (totalFilters === 0) {
                filteredCars = allCars.slice();
            } else {
                filteredCars = this.filterCars(allCars);
            }
            
            this.renderCars(filteredCars);
            
            this.showNotification('Applied ' + totalFilters + ' filter' + (totalFilters !== 1 ? 's' : '') + 
                                 ' - Showing ' + filteredCars.length + ' cars', 'info');
        },

        filterCars: function(cars) {
            var self = this;
            
            return cars.filter(function(car) {
                // Check body type filter
                if (self.selectedFilters.bodyType.length > 0) {
                    if (self.selectedFilters.bodyType.indexOf(car.bodyType) === -1) {
                        return false;
                    }
                }
                
                // Check fuel type filter
                if (self.selectedFilters.fuelType.length > 0) {
                    if (self.selectedFilters.fuelType.indexOf(car.fuelType) === -1) {
                        return false;
                    }
                }
                
                // Check transmission filter
                if (self.selectedFilters.transmission.length > 0) {
                    if (self.selectedFilters.transmission.indexOf(car.transmission) === -1) {
                        return false;
                    }
                }
                
                // Check seating capacity filter
                if (self.selectedFilters.seatingCapacity.length > 0) {
                    if (self.selectedFilters.seatingCapacity.indexOf(car.seatingCapacity) === -1) {
                        return false;
                    }
                }
                
                // Check fuel plan filter
                if (self.selectedFilters.fuelPlan.length > 0) {
                    if (self.selectedFilters.fuelPlan.indexOf(car.fuelPlan) === -1) {
                        return false;
                    }
                }
                
                return true;
            });
        },

        renderCars: function(cars) {
            var $carsContainer = $('.rightbar .row.g-3.mb-5');
            
            if (cars.length === 0) {
                $carsContainer.html(
                    '<div class="col-12 text-center py-5">' +
                        '<div class="alert alert-info">' +
                            '<i class="fas fa-info-circle me-2"></i>' +
                            'No cars found matching your filters. Try adjusting your search criteria.' +
                        '</div>' +
                    '</div>'
                );
                return;
            }
            
            var carsHTML = '';
            
            cars.forEach(function(car) {
                carsHTML += 
                    '<div class="col-md-6">' +
                        '<div class="card h-100">' +
                            '<img src="' + car.image + '" class="card-img-top car-image" alt="' + car.name + ' ' + car.model + '">' +
                            '<div class="card-body">' +
                                '<h5 class="card-title">' + car.name + '</h5>' +
                                '<p class="card-text text-muted small">' + car.model + '</p>' +
                                '<div class="d-flex justify-content-between align-items-center mb-2">' +
                                    '<div class="d-flex align-items-center gap-2">' +
                                        '<div class="rating-circle">' + Math.floor(car.rating) + '</div>' +
                                        '<span class="small text-muted">Comfortable</span>' +
                                    '</div>' +
                                    '<div class="text-end">' +
                                        '<div class="price-amount">₹' + car.price + '/day</div>' +
                                        '<div class="small text-muted">' + car.rating + '/5</div>' +
                                    '</div>' +
                                '</div>' +
                                '<div class="row small text-muted mb-2">' +
                                    '<div class="col-6">' +
                                        '<i class="fas fa-car me-1"></i>' + car.bodyType +
                                    '</div>' +
                                    '<div class="col-6">' +
                                        '<i class="fas fa-gas-pump me-1"></i>' + car.fuelType +
                                    '</div>' +
                                    '<div class="col-6">' +
                                        '<i class="fas fa-cogs me-1"></i>' + car.transmission +
                                    '</div>' +
                                    '<div class="col-6">' +
                                        '<i class="fas fa-users me-1"></i>' + car.seatingCapacity + ' Seats' +
                                    '</div>' +
                                '</div>' +
                                '<div class="small text-muted mb-3">' +
                                    '<i class="fas fa-gas-pump me-1"></i>Fuel Plan: ' + car.fuelPlan +
                                '</div>' +
                                '<button class="btn btn-primary w-100" onclick="bookCar(' + car.id + ')">' +
                                    'Book Now' +
                                '</button>' +
                            '</div>' +
                        '</div>' +
                    '</div>';
            });
            
            $carsContainer.html(carsHTML);
        },

        updateDisplay: function() {
            this.updateSelectedFiltersDisplay();
            this.updateApplyButton();
        },

        updateSelectedFiltersDisplay: function() {
            var $container = $('#selectedFiltersDisplay');
            var hasFilters = this.getTotalFilterCount() > 0;

            if (!hasFilters) {
                $container.html('<div class="no-filters-message">No filters selected</div>');
                return;
            }

            var filtersHTML = '';
            var self = this;
            
            Object.keys(this.selectedFilters).forEach(function(filterType) {
                self.selectedFilters[filterType].forEach(function(value) {
                    filtersHTML += '<span class="filter-value d-inline-block me-2 mb-2">' +
                                  value + 
                                  ' <i class="fas fa-times remove-filter" ' +
                                  'data-filter-type="' + filterType + '" ' +
                                  'data-filter-value="' + value + '"></i>' +
                                  '</span>';
                });
            });

            $container.html(filtersHTML);
        },

        updateApplyButton: function() {
            var $applyBtn = $('#applyBtn');
            var totalFilters = this.getTotalFilterCount();
            var hasFilters = totalFilters > 0;

            $applyBtn.prop('disabled', !hasFilters);

            if (hasFilters) {
                $applyBtn.removeClass('btn-secondary').addClass('btn-primary');
                $('#totalFilterCount').text(totalFilters).show();
            } else {
                $applyBtn.removeClass('btn-primary').addClass('btn-secondary');
                $('#totalFilterCount').hide();
            }
        },

        updateFilterCounts: function() {
            var self = this;
            Object.keys(this.selectedFilters).forEach(function(filterType) {
                var count = self.selectedFilters[filterType].length;
                var $counter = $('#' + filterType + 'Count');
                
                if (count > 0) {
                    $counter.text(count).show();
                } else {
                    $counter.hide();
                }
            });
        },

        getTotalFilterCount: function() {
            var total = 0;
            var self = this;
            Object.keys(this.selectedFilters).forEach(function(key) {
                total += self.selectedFilters[key].length;
            });
            return total;
        },

        showNotification: function(message, type) {
            type = type || 'info';
            var $notification = $('<div class="alert alert-' + type + ' alert-dismissible fade show position-fixed" ' +
                                 'style="top: 20px; right: 20px; z-index: 9999; min-width: 300px;">' +
                                 message +
                                 '<button type="button" class="btn-close" data-bs-dismiss="alert"></button>' +
                                 '</div>');

            $('body').append($notification);

            setTimeout(function() {
                $notification.alert('close');
            }, 3000);
        },

        getSelectedFilters: function() {
            var result = {};
            var self = this;
            Object.keys(this.selectedFilters).forEach(function(key) {
                result[key] = self.selectedFilters[key].slice();
            });
            return result;
        },

        setFilters: function(filters) {
            var self = this;
            this.selectedFilters = {};
            
            Object.keys(filters).forEach(function(key) {
                self.selectedFilters[key] = filters[key].slice();
            });
            
            $('.filter-option input[type="checkbox"]').prop('checked', false);
            
            Object.keys(filters).forEach(function(filterType) {
                filters[filterType].forEach(function(value) {
                    $('.filter-option').each(function() {
                        var $this = $(this);
                        if ($this.attr('data-filter-type') === filterType && 
                            $this.attr('data-filter-value') === value) {
                            $this.find('input[type="checkbox"]').prop('checked', true);
                        }
                    });
                });
            });

            this.updateDisplay();
            this.updateFilterCounts();
        }
    };

    filterManager.init();
    window.carRentalFilters = filterManager;
});

// Book car function
function bookCar(carId) {
    var car = allCars.find(function(c) { return c.id === carId; });
    if (car) {
        alert('Booking ' + car.name + ' ' + car.model + ' for ₹' + car.price + '/day');
        // Here you would typically redirect to booking page or open booking modal
    }
}

        
    </script>
</body>
 </html>
 