// detail.js - Consolidated Car Data and Comparison System
console.log("detail.js loaded and executing."); // Added for debugging file loading

// --- Master Car Data (for detailed comparison and category browsing) ---
const allCarsData = [
    {
        id: 1, name: 'Grand i10 Nios Sportz', brand: 'Hyundai', price: '₹ 6,50,000', showroomPrice: '₹ 7,00,000 (Ex-Showroom)', image: './assets/image/grand_i10_nios.png', category: 'hatchback',
        features: {
            engine: '1.2L Kappa Petrol', mileage: '20.7 kmpl', transmission: 'Manual', fuel: 'Petrol', seating: 5, color: 'Red', airbags: '2', sunroof: 'No', infotainment: '8-inch Touchscreen', parkingSensors: 'Rear', bootSpace: '260L'
        }
    },
    {
        id: 2, name: 'City V MT', brand: 'Honda', price: '₹ 10,00,000', showroomPrice: '₹ 11,50,000 (Ex-Showroom)', image: './assets/image/honda_city.png', category: 'sedan',
        features: {
            engine: '1.5L i-VTEC Petrol', mileage: '17.8 kmpl', transmission: 'Manual', fuel: 'Petrol', seating: 5, color: 'Blue', airbags: '4', sunroof: 'Yes', infotainment: '8-inch Touchscreen', parkingSensors: 'Rear', bootSpace: '506L'
        }
    },
    {
        id: 3, name: 'Creta SX', brand: 'Hyundai', price: '₹ 12,00,000', showroomPrice: '₹ 14,00,000 (Ex-Showroom)', image: './assets/image/hyundai_creta.png', category: 'suv',
        features: {
            engine: '1.5L MPi Petrol', mileage: '17.0 kmpl', transmission: 'Manual', fuel: 'Petrol', seating: 5, color: 'White', airbags: '6', sunroof: 'Yes', infotainment: '10.25-inch Touchscreen', parkingSensors: 'Front & Rear', bootSpace: '433L'
        }
    },
    {
        id: 4, name: 'Nexon EV Prime XZ+', brand: 'Tata', price: '₹ 14,50,000', showroomPrice: '₹ 15,30,000 (Ex-Showroom)', image: './assets/image/tata_nexon_ev.png', category: 'electric',
        features: {
            engine: 'Electric Motor', mileage: '312 km (range)', transmission: 'Automatic', fuel: 'Electric', seating: 5, color: 'Teal', airbags: '2', sunroof: 'No', infotainment: '7-inch Touchscreen', parkingSensors: 'Rear', bootSpace: '350L'
        }
    },
    {
        id: 5, name: 'Swift ZXi', brand: 'Maruti Suzuki', price: '₹ 7,20,000', showroomPrice: '₹ 7,80,000 (Ex-Showroom)', image: './assets/image/maruti_swift.png', category: 'hatchback',
        features: {
            engine: '1.2L K12N Petrol', mileage: '23.2 kmpl', transmission: 'Manual', fuel: 'Petrol', seating: 5, color: 'Blue', airbags: '2', sunroof: 'No', infotainment: '7-inch SmartPlay', parkingSensors: 'Rear', bootSpace: '268L'
        }
    },
    {
        id: 6, name: 'Verna SX (O)', brand: 'Hyundai', price: '₹ 13,50,000', showroomPrice: '₹ 15,00,000 (Ex-Showroom)', image: './assets/image/hyundai_verna.png', category: 'sedan',
        features: {
            engine: '1.5L Turbo GDi Petrol', mileage: '20.6 kmpl', transmission: 'Automatic (DCT)', fuel: 'Petrol', seating: 5, color: 'Black', airbags: '6', sunroof: 'Yes', infotainment: '10.25-inch Touchscreen', parkingSensors: 'Front & Rear', bootSpace: '528L'
        }
    },
    {
        id: 7, name: 'Thar LX Hard Top', brand: 'Mahindra', price: '₹ 14,00,000', showroomPrice: '₹ 16,50,000 (Ex-Showroom)', image: './assets/image/mahindra_thar.png', category: 'suv',
        features: {
            engine: '2.2L mHawk Diesel', mileage: '15.2 kmpl', transmission: 'Manual', fuel: 'Diesel', seating: 4, color: 'Black', airbags: '2', sunroof: 'No', infotainment: '7-inch Touchscreen', parkingSensors: 'Rear', bootSpace: 'Not Specified'
        }
    },
    {
        id: 8, name: 'Tiago EV XZ+', brand: 'Tata', price: '₹ 9,00,000', showroomPrice: '₹ 9,50,000 (Ex-Showroom)', image: './assets/image/tata_tiago_ev.png', category: 'electric',
        features: {
            engine: 'Electric Motor', mileage: '250 km (range)', transmission: 'Automatic', fuel: 'Electric', seating: 5, color: 'Teal', airbags: '2', sunroof: 'No', infotainment: '7-inch Touchscreen', parkingSensors: 'Rear', bootSpace: '240L'
        }
    }
];

// --- Car Selection Modal Data (for brand/model/variant selection) ---
// This data is separate from allCarsData because it focuses on the selection flow (brands, models, variants)
// rather than the detailed specifications of individual cars.
const carSelectionData = {
    brands: [
        { name: 'Suzuki', logo: 'fas fa-car', models: ['Swift', 'Baleno', 'Wagon R 1.0', 'Alto', 'Esteem', 'Gypsy', 'Omni', 'Versa', 'Wagon R', 'Wagon R MAV', 'Zen'] },
        { name: 'Toyota', logo: 'fas fa-car', models: ['Camry', 'Corolla', 'Prius', 'Yaris'] },
        { name: 'Tata', logo: 'fas fa-truck', models: ['Nexon', 'Harrier', 'Safari', 'Altroz'] },
        { name: 'Hyundai', logo: 'fas fa-car', models: ['i20', 'Creta', 'Verna', 'Grand i10'] },
        { name: 'Mahindra', logo: 'fas fa-car', models: ['XUV700', 'Thar', 'Scorpio', 'Bolero'] },
        { name: 'Honda', logo: 'fas fa-car', models: ['City', 'Amaze', 'Jazz', 'WR-V'] },
        { name: 'Ford', logo: 'fas fa-car', models: ['EcoSport', 'Endeavour', 'Figo', 'Aspire'] },
        { name: 'Fiat', logo: 'fas fa-car', models: ['Punto', 'Linea', 'Avventura'] },
        { name: 'Nissan', logo: 'fas fa-car', models: ['Magnite', 'Kicks', 'Sunny', 'Terrano'] },
        { name: 'Kia', logo: 'fas fa-car', models: ['Seltos', 'Sonet', 'Carnival'] },
        { name: 'Volkswagen', logo: 'fas fa-car', models: ['Polo', 'Vento', 'Tiguan', 'T-Cross'] },
        { name: 'MG', logo: 'fas fa-car', models: ['Hector', 'ZS EV', 'Gloster'] },
        { name: 'Renault', logo: 'fas fa-car', models: ['Kwid', 'Duster', 'Kiger', 'Triber'] },
        { name: 'Isuzu', logo: 'fas fa-truck', models: ['D-Max', 'MU-X'] },
        { name: 'Jaguar', logo: 'fas fa-car', models: ['XE', 'XF', 'F-Pace', 'E-Pace'] },
        { name: 'BMW', logo: 'fas fa-car', models: ['3 Series', '5 Series', 'X1', 'X3'] },
        { name: 'Audi', logo: 'fas fa-car', models: ['A4', 'A6', 'Q3', 'Q5'] },
        { name: 'Rolls Royce', logo: 'fas fa-crown', models: ['Phantom', 'Ghost', 'Wraith'] },
        { name: 'Acura', logo: 'fas fa-car', models: ['MDX', 'RDX', 'TLX'] }
    ],
    variants: {
        'Swift': ['AC', 'AC BS-II', 'AC BS-III', 'DX 5 SPEED', 'EX BS-II', 'EX BS-III', 'Std MPFI', 'DX BS-II'],
        'Baleno': ['Delta', 'Zeta', 'Alpha', 'Sigma'],
        'Alto': ['LX', 'LXI', 'VX', 'VXI'],
        'Wagon R 1.0': ['LX', 'LXI', 'VX', 'VXI'],
        'City': ['V MT', 'VX MT', 'ZX MT', 'V CVT'],
        'Creta': ['E', 'EX', 'S', 'SX'],
        'i20': ['Magna', 'Sportz', 'Asta'],
        'Verna': ['E', 'S', 'SX', 'SX(O)']
    }
};

// --- Global Variables for Comparison ---
let selectedCar1 = null;
let selectedCar2 = null;
let currentCarSlot = 0; // To track which slot (1 or 2) opened the modal
let selectedBrand = '';
let selectedModel = '';

// --- Unified Carousel Scrolling Function ---
/**
 * Scrolls a given carousel container horizontally.
 * @param {string} containerId The ID of the container element to scroll.
 * @param {number} direction -1 for left, 1 for right.
 */
function scrollCarousel(containerId, direction) {
    const container = document.getElementById(containerId);
    // If the container is not found by ID, try finding it by class
    if (!container) {
        const containersByClass = document.querySelectorAll(`.${containerId}`);
        if (containersByClass.length > 0) {
            // Assuming there's only one relevant container for scrolling, pick the first one
            // If multiple elements have the same class and need separate scrolling,
            // this function might need to be called for each, or redesigned.
            container = containersByClass[0];
        } else {
            console.error(`Container with ID or Class '${containerId}' not found.`);
            return;
        }
    }

    let scrollAmount;

    if (containerId === 'topRatedCarsCarousel') {
        // For Top Rated Cars, scroll by the width of two cards + gutter
        const firstCardCol = container.querySelector('.card-col');
        if (firstCardCol) {
            const cardWidth = firstCardCol.offsetWidth;
            // Get the computed gap from the container (e.g., Bootstrap's g-4 = 1.5rem = 24px)
            const gap = parseFloat(getComputedStyle(container).getPropertyValue('gap')) || 24;
            scrollAmount = (cardWidth * 2) + gap; // Scroll by two card widths plus one gap
        } else {
            scrollAmount = 600; // Fallback if no cards are loaded yet
        }
    } else if (containerId === 'cars-container' || containerId === 'popular-cars-container') { // For the 'Compare' section carousel and popular cars
        const firstCompareCard = container.querySelector('.compare-card');
        if (firstCompareCard) {
            const cardWidth = firstCompareCard.offsetWidth;
            const gap = parseFloat(getComputedStyle(container).getPropertyValue('gap')) || 16; // Assuming 1rem (16px) gap
            scrollAmount = (cardWidth * 2) + gap; // Scroll by two comparison card widths + gap
        } else {
            scrollAmount = 600; // Fallback
        }
    } else {
        scrollAmount = 300; // Default fallback for other/unknown carousels
    }

    container.scrollBy({
        left: direction * scrollAmount,
        behavior: 'smooth'
    });
}

// --- Comparison Page Specific Functions ---
/**
 * Updates the display of a car card in the main comparison section.
 * @param {string} cardId The ID of the car card element ('car1-card' or 'car2-card').
 * @param {object} carData The data of the car to display.
 */
function updateCarCard(cardId, carData) {
    console.log(`Updating car card: ${cardId} with`, carData);
    const card = document.getElementById(cardId);
    if (!card) {
        console.error(`Error: Car card element with ID '${cardId}' not found.`);
        return;
    }
    card.innerHTML = `
        <img src="${carData.image}" alt="${carData.name}" class="img-fluid mb-2" style="max-height: 100px;">
        <h5 class="fw-bold">${carData.name}</h5>
        <p class="text-muted">${carData.brand}</p>
        <p class="fw-bold text-primary">${carData.price}</p>
        <button class="btn btn-sm btn-outline-danger mt-2" onclick="removeCar('${cardId}')">Remove</button>
    `;
    card.classList.add('selected');
    console.log(`Car card ${cardId} updated.`);
}

/**
 * Removes a car from the main comparison section.
 * @param {string} cardId The ID of the car card element ('car1-card' or 'car2-card').
 */
function removeCar(cardId) {
    console.log(`Removing car from: ${cardId}`);
    if (cardId === 'car1-card') {
        selectedCar1 = null;
        // Clear comparison result display for car 1
        document.getElementById('result-car1-image').src = '';
        document.getElementById('result-car1-name').textContent = '';
        document.getElementById('result-car1-brand').textContent = '';
        document.getElementById('result-car1-price').textContent = '';
    } else {
        selectedCar2 = null;
        // Clear comparison result display for car 2
        document.getElementById('result-car2-image').src = '';
        document.getElementById('result-car2-name').textContent = '';
        document.getElementById('result-car2-brand').textContent = '';
        document.getElementById('result-car2-price').textContent = '';
    }
    const card = document.getElementById(cardId);
    if (!card) {
        console.error(`Error: Car card element with ID '${cardId}' not found during removal.`);
        return;
    }
    card.innerHTML = `
        <button class="add-car-btn" data-bs-toggle="modal" data-bs-target="#carSelectionModal" data-car-slot="${cardId === 'car1-card' ? 1 : 2}">
            <i class="bi bi-plus-lg"></i>
        </button>
        <span class="d-block mt-2">Add Car ${cardId === 'car1-card' ? 1 : 2}</span>
    `;
    card.classList.remove('selected');
    checkComparisonReady();
    document.getElementById('comparisonResult').style.display = 'none'; // Hide results if a car is removed
    console.log(`Car removed from ${cardId}.`);
}

/**
 * Checks if two cars are selected and enables/disables the comparison button.
 */
function checkComparisonReady() {
    console.log('Checking comparison readiness. Car1:', selectedCar1, 'Car2:', selectedCar2);
    const compareBtn = document.getElementById('startComparisonBtn');
    if (!compareBtn) {
        console.error('Error: startComparisonBtn not found.');
        return;
    }
    if (selectedCar1 && selectedCar2) {
        compareBtn.disabled = false;
        console.log('Comparison button enabled.');
    } else {
        compareBtn.disabled = true;
        console.log('Comparison button disabled.');
    }
}

/**
 * Displays the detailed comparison table for the two selected cars.
 */
function displayComparison() {
    console.log('Displaying comparison results.');
    if (selectedCar1 && selectedCar2) {
        // Update Car 1 display
        document.getElementById('result-car1-image').src = selectedCar1.image;
        document.getElementById('result-car1-name').textContent = selectedCar1.name;
        document.getElementById('result-car1-brand').textContent = selectedCar1.brand;
        document.getElementById('result-car1-price').textContent = selectedCar1.price;

        // Update Car 2 display
        document.getElementById('result-car2-image').src = selectedCar2.image;
        document.getElementById('result-car2-name').textContent = selectedCar2.name;
        document.getElementById('result-car2-brand').textContent = selectedCar2.brand;
        document.getElementById('result-car2-price').textContent = selectedCar2.price;

        // Update feature table
        const features = Object.keys(selectedCar1.features);
        features.forEach(featureKey => {
            const value1 = selectedCar1.features[featureKey] || '<span class="no-data">N/A</span>';
            const value2 = selectedCar2.features[featureKey] || '<span class="no-data">N/A</span>';
            const element1 = document.getElementById(`feature-${featureKey}-car1`);
            const element2 = document.getElementById(`feature-${featureKey}-car2`);
            if (element1) element1.innerHTML = value1;
            if (element2) element2.innerHTML = value2;
        });

        document.getElementById('comparisonResult').style.display = 'block';
        document.getElementById('comparisonResult').scrollIntoView({ behavior: 'smooth' }); // Scroll to results
        console.log('Comparison results displayed.');
    } else {
        console.log('Cannot display comparison: Not enough cars selected.');
    }
}

/**
 * Loads cars based on the selected category into the "Popular Cars in Selected Category" carousel.
 * @param {string} category The category to filter cars by (e.g., 'hatchback', 'sedan').
 */
function loadCategoryCars(category) {
    console.log('Loading category cars for:', category);
    const carsContainer = document.getElementById('popular-cars-container'); // Changed ID to popular-cars-container
    if (!carsContainer) {
        console.error('Error: #popular-cars-container not found.');
        return;
    }

    carsContainer.innerHTML = ''; // Clear previous cars

    const filteredCars = allCarsData.filter(car => car.category === category);

    if (filteredCars.length === 0) {
        carsContainer.innerHTML = '<p class="text-center w-100">No cars found in this category.</p>';
        console.log('No cars found for category:', category);
        return;
    }

    filteredCars.forEach(car => {
        const carCardHtml = `
            <div class="compare-card p-3">
                <img src="${car.image}" class="img-fluid rounded mb-2" alt="${car.name}" style="height: 150px; width: 100%; object-fit: cover;">
                <h6 class="fw-bold mb-1">${car.name}</h6>
                <p class="text-muted small mb-1">${car.brand}</p>
                <p class="fw-bold text-primary small mb-2">${car.price}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <button class="btn btn-sm btn-outline-secondary" onclick="selectCarForComparison(${car.id})">Select</button>
                    <a href="#" class="text-primary small">Details</a>
                </div>
            </div>
        `;
        carsContainer.insertAdjacentHTML('beforeend', carCardHtml);
    });
    console.log(`Loaded ${filteredCars.length} cars for category: ${category}`);
}

/**
 * Selects a car from the category carousel for comparison.
 * @param {number} carId The ID of the car to select.
 */
function selectCarForComparison(carId) {
    console.log('Attempting to select car for comparison:', carId);
    const selectedCar = allCarsData.find(car => car.id === carId);
    if (!selectedCar) {
        console.error('Error: Car not found with ID:', carId);
        return;
    }

    if (!selectedCar1) {
        selectedCar1 = selectedCar;
        updateCarCard('car1-card', selectedCar);
        console.log('Car selected for slot 1:', selectedCar.name);
    } else if (!selectedCar2 && selectedCar.id !== selectedCar1.id) {
        selectedCar2 = selectedCar;
        updateCarCard('car2-card', selectedCar);
        console.log('Car selected for slot 2:', selectedCar.name);
    } else if (selectedCar.id === selectedCar1.id || selectedCar.id === selectedCar2?.id) {
        console.log('This car is already selected!');
    } else {
        console.log('You can only compare two cars at a time. Please remove one to select a new car.');
    }
    checkComparisonReady();
}

// --- Car Selection Modal Functions (from comp.php, integrated) ---
/**
 * Opens the car selection modal and sets the current car slot.
 * @param {number} carSlot The slot number (1 or 2) for which the car is being selected.
 */
function openCarSelector(carSlot) {
    console.log('openCarSelector called for slot:', carSlot);
    currentCarSlot = carSlot;
    resetModal(); // Reset modal to initial brand selection state
    $('#carSelectionModal').modal('show');
    console.log('Car selection modal shown.');
}

/**
 * Resets the car selection modal to its initial state (brand selection).
 */
function resetModal() {
    console.log('resetModal called.');
    $('#modalTitle').text('Select your car brand');
    $('#brandSelection').show();
    $('#modelSelection').hide();
    $('#variantSelection').hide();
    $('#searchInput').attr('placeholder', 'Search your brand').val('');
    selectedBrand = '';
    selectedModel = '';
    // Clear search input
    $('#searchInput').val('');
    populateBrands(); // Repopulate brands to ensure all are visible
    console.log('Modal reset to brand selection.');
}

/**
 * Populates the brand grid in the car selection modal.
 */
function populateBrands() {
    console.log('populateBrands called');
    const brandGrid = $('#brandGrid');
    if (brandGrid.length === 0) {
        console.error('Error: #brandGrid not found in DOM. Cannot populate brands.');
        return;
    }
    brandGrid.empty();
    console.log('brandGrid emptied.');

    if (!carSelectionData || !carSelectionData.brands || carSelectionData.brands.length === 0) {
        console.warn('Warning: carSelectionData.brands is empty or undefined. No brands to populate.');
        return;
    }

    carSelectionData.brands.forEach(brand => {
        const brandCard = $(`
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="brand-card" onclick="selectBrand('${brand.name}')">
                    <i class="${brand.logo} fa-2x mb-2 text-primary"></i>
                    <div class="fw-bold">${brand.name}</div>
                </div>
            </div>
        `);
        brandGrid.append(brandCard);
    });
    console.log(`Populated ${carSelectionData.brands.length} brands. Current #brandGrid HTML:`, brandGrid.html()); // Debug log
}

/**
 * Filters brands in the modal based on the search term.
 * @param {string} searchTerm The search query.
 */
function filterBrands(searchTerm) {
    console.log('Filtering brands with term:', searchTerm);
    $('#brandGrid .col-lg-2').each(function() {
        const brandName = $(this).find('.fw-bold').text().toLowerCase();
        if (brandName.includes(searchTerm)) {
            $(this).show();
        } else {
            $(this).hide();
        }
    });
}

/**
 * Selects a brand and displays its models in the modal.
 * @param {string} brandName The name of the selected brand.
 */
function selectBrand(brandName) {
    console.log('selectBrand called with:', brandName);
    selectedBrand = brandName;
    const brand = carSelectionData.brands.find(b => b.name === brandName);

    if (!brand) {
        console.error('Error: Brand not found for name:', brandName);
        return;
    }

    $('#modalTitle').text('Select your car models');
    $('#brandSelection').hide();
    $('#modelSelection').show();
    $('#searchInput').attr('placeholder', 'Search your model').val('');

    populateModels(brand.models);
    console.log(`Brand selected: ${brandName}. Moving to model selection.`);
}

/**
 * Populates the model grids (popular and all) in the car selection modal.
 * @param {string[]} models An array of model names for the selected brand.
 */
function populateModels(models) {
    console.log('Populating models with:', models);
    const popularModels = $('#popularModels');
    const allModels = $('#allModels');

    popularModels.empty();
    allModels.empty();

    // Show first 5 as popular, rest as all models
    const popular = models.slice(0, 5);
    const remaining = models.slice(5);

    popular.forEach(model => {
        const modelCard = createModelCard(model);
        popularModels.append(modelCard);
    });

    remaining.forEach(model => {
        const modelCard = createModelCard(model);
        allModels.append(modelCard);
    });
    console.log(`Populated ${models.length} models.`);
}

/**
 * Creates an HTML card element for a car model.
 * @param {string} model The name of the car model.
 * @returns {jQuery} A jQuery object representing the model card.
 */
function createModelCard(model) {
    return $(`
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="model-card" onclick="selectModel('${model}')">
                <div class="fw-bold">${model}</div>
            </div>
        </div>
    `);
}

/**
 * Filters models in the modal based on the search term.
 * @param {string} searchTerm The search query.
 */
function filterModels(searchTerm) {
    console.log('Filtering models with term:', searchTerm);
    $('#popularModels .col-lg-2, #allModels .col-lg-2').each(function() {
        const modelName = $(this).find('.fw-bold').text().toLowerCase();
        if (modelName.includes(searchTerm)) {
            $(this).show();
        } else {
            $(this).hide();
        }
    });
}

/**
 * Selects a model and displays its variants in the modal.
 * @param {string} modelName The name of the selected model.
 */
function selectModel(modelName) {
    console.log('selectModel called with:', modelName);
    selectedModel = modelName;

    $('#modalTitle').text('Select your car variant');
    $('#modelSelection').hide();
    $('#variantSelection').show();
    $('#searchInput').attr('placeholder', 'Search your Variant').val('');

    populateVariants(modelName);
    console.log(`Model selected: ${modelName}. Moving to variant selection.`);
}

/**
 * Populates the variant grid in the car selection modal.
 * @param {string} modelName The name of the selected model to get variants for.
 */
function populateVariants(modelName) {
    console.log('Populating variants for model:', modelName);
    const variantGrid = $('#variantGrid');
    variantGrid.empty();

    const variants = carSelectionData.variants[modelName] || ['Standard', 'Deluxe', 'Premium']; // Fallback variants

    variants.forEach(variant => {
        const variantCard = $(`
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="variant-card" onclick="selectVariant('${variant}')">
                    <div class="fw-bold">${variant}</div>
                </div>
            </div>
        `);
        variantGrid.append(variantCard);
    });
    console.log(`Populated ${variants.length} variants.`);
}

/**
 * Filters variants in the modal based on the search term.
 * @param {string} searchTerm The search query.
 */
function filterVariants(searchTerm) {
    console.log('Filtering variants with term:', searchTerm);
    $('#variantGrid .col-lg-3').each(function() {
        const variantName = $(this).find('.fw-bold').text().toLowerCase();
        if (variantName.includes(searchTerm)) {
            $(this).show();
        } else {
            $(this).hide();
        }
    });
}

/**
 * Selects a variant, creates a new car object, and adds it to the comparison.
 * @param {string} variant The selected variant name.
 */
function selectVariant(variant) {
    console.log('selectVariant called with:', variant);
    // Create a new car object based on selected brand, model, and variant
    // This part simulates fetching detailed car data for the selected variant.
    const newCarId = allCarsData.length + 1; // Simple ID generation
    let newCar = {
        id: newCarId,
        name: `${selectedBrand} ${selectedModel}`, // Base name
        brand: selectedBrand,
        price: '₹ ' + (Math.random() * 10 + 5).toFixed(2) + ' Lakh', // Dummy price
        showroomPrice: '₹ ' + (Math.random() * 12 + 6).toFixed(2) + ' Lakh (Ex-Showroom)', // Dummy showroom price
        image: './assets/image/car-placeholder.jpg', // Placeholder image
        category: 'unknown', // Default category
        features: {} // Initialize features
    };

    // Attempt to find a matching car in allCarsData to get more realistic features
    const existingCar = allCarsData.find(car => car.brand === selectedBrand && car.name.includes(selectedModel));
    if (existingCar) {
        // If a similar car exists, copy its features and image
        newCar.features = { ...existingCar.features }; // Deep copy features
        newCar.image = existingCar.image;
        newCar.category = existingCar.category;
        console.log('Found existing car data for selected brand/model. Copying features.');
    } else {
        // If no matching car, generate some dummy features
        newCar.features = {
            engine: '1.2L Petrol',
            mileage: (Math.random() * 10 + 15).toFixed(1) + ' kmpl',
            transmission: Math.random() > 0.5 ? 'Manual' : 'Automatic',
            fuel: Math.random() > 0.7 ? 'Diesel' : 'Petrol',
            seating: Math.random() > 0.5 ? 5 : 7,
            color: ['Red', 'Blue', 'White', 'Black', 'Silver'][Math.floor(Math.random() * 5)],
            airbags: Math.floor(Math.random() * 6) + 2,
            sunroof: Math.random() > 0.5 ? 'Yes' : 'No',
            infotainment: Math.random() > 0.5 ? '8-inch Touchscreen' : '7-inch Display',
            parkingSensors: Math.random() > 0.5 ? 'Front & Rear' : 'Rear',
            bootSpace: Math.floor(Math.random() * 300 + 200) + 'L'
        };
        console.log('No existing car data found. Generating dummy features.');
    }

    // Add the variant to the car name for display purposes
    newCar.name = `${newCar.name} ${variant}`;

    // Add the newly created car to the allCarsData array if it's unique
    // This ensures that dynamically added cars can also be selected later if needed
    if (!allCarsData.some(car => car.id === newCar.id)) {
        allCarsData.push(newCar);
        console.log('New car added to allCarsData:', newCar);
    } else {
        console.log('Car already exists in allCarsData.');
    }

    // Assign the selected car to the appropriate slot
    if (currentCarSlot === 1) {
        selectedCar1 = newCar;
        console.log('Selected car assigned to slot 1.');
    } else {
        selectedCar2 = newCar;
        console.log('Selected car assigned to slot 2.');
    }

    // Update the main car card display
    updateCarCard(`car${currentCarSlot}-card`, newCar);

    $('#carSelectionModal').modal('hide');
    checkComparisonReady();
    console.log('Variant selected and car added to comparison. Modal hidden.');
}

/**
 * Navigates back to the brand selection view in the modal.
 */
function goBackToBrands() {
    console.log('Navigating back to brands.');
    $('#modalTitle').text('Select your car brand');
    $('#modelSelection').hide();
    $('#brandSelection').show();
    $('#searchInput').attr('placeholder', 'Search your brand').val('');
    selectedBrand = '';
    console.log('Now showing brand selection.');
}

/**
 * Navigates back to the model selection view in the modal.
 */
function goBackToModels() {
    console.log('Navigating back to models.');
    $('#modalTitle').text('Select your car models');
    $('#variantSelection').hide();
    $('#modelSelection').show();
    $('#searchInput').attr('placeholder', 'Search your model').val('');
    selectedModel = '';
    console.log('Now showing model selection.');
}

// --- Dynamic Loading for Top Rated Cars (Separate Data as it's for display, not direct comparison selection) ---
const topRatedCarsData = [
    {
        image: './assets/image/top1.png',
        title: 'Hyundai Grand i10 Nios Sportz',
        mileage: '3k km',
        fuel: 'Petrol',
        transmission: 'Manual',
        owner: '1st Owner',
        price: '₹ 6,50,000',
        link: './card_details.html'
    },
    {
        image: './assets/image/top2.png',
        title: 'Honda City V MT',
        mileage: '15k km',
        fuel: 'Petrol',
        transmission: 'Manual',
        owner: '2nd Owner',
        price: '₹ 10,00,000',
        link: './card_details.html'
    },
    {
        image: './assets/image/top3.png',
        title: 'Hyundai Creta SX',
        mileage: '20k km',
        fuel: 'Diesel',
        transmission: 'Automatic',
        owner: '1st Owner',
        price: '₹ 12,00,000',
        link: './card_details.html'
    },
    {
        image: './assets/image/top4.png',
        title: 'Tata Nexon EV Prime XZ+',
        mileage: '10k km',
        fuel: 'Electric',
        transmission: 'Automatic',
        owner: '1st Owner',
        price: '₹ 14,50,000',
        link: './card_details.html'
    },
    {
        image: './assets/image/top1.png', // Duplicate for more scrollable content
        title: 'Hyundai Grand i10 Nios Sportz',
        mileage: '3k km',
        fuel: 'Petrol',
        transmission: 'Manual',
        owner: '1st Owner',
        price: '₹ 6,50,000',
        link: './card_details.html'
    },
    {
        image: './assets/image/top2.png', // Duplicate
        title: 'Honda City V MT',
        mileage: '15k km',
        fuel: 'Petrol',
        transmission: 'Manual',
        owner: '2nd Owner',
        price: '₹ 10,00,000',
        link: './card_details.html'
    }
];

// --- Other Data for Sellhome.php sections (if still needed here) ---
const processStepsData = [{
    number: 1,
    image: './assets/image/get_price.png',
    alt: 'Car evaluation',
    title: 'Car Evaluation',
    description: 'Share your car details and receive an instant preliminary quote.'
},
{
    number: 2,
    image: './assets/image/car-inspect.png',
    alt: 'Car inspection',
    title: 'Car Inspection',
    description: 'Our car expert will physically verify your car’s condition and give you the final offer.'
},
{
    number: 3,
    image: './assets/image/car-pick.png',
    alt: 'Car pick up & payment',
    title: 'Car Pick up & Payment',
    description: 'We transfer the amount directly to your bank account before your car is picked up.'
}
];

const whyTrueMotorsData = [{
    image: './assets/image/1year_warranty.png',
    alt: '1 Year warranty',
    title: '1 Year Warranty'
},
{
    image: './assets/image/easy Emi.png',
    alt: 'Easy EMI Option',
    title: 'Easy EMI Option'
},
{
    image: './assets/image/take_test_drive.png',
    alt: 'Take test drive',
    title: 'Take Test Drive'
},
{
    image: './assets/image/sell_vech.png',
    alt: 'Sell vehicle',
    title: 'Sell Vehicle Stress Free'
},
{
    image: './assets/image/buy-used_vech.png',
    alt: 'Buy used vehicle',
    title: 'Buy Used Vehicle'
}
];

const features = [{
    icon: './assets/icon/f1.png',
    title: 'Special Financing Offers',
    description: 'Our stress-free finance department that can find financial solutions to save you money.'
},
{
    icon: './assets/icon/f2.png',
    title: 'Trusted Car Dealership',
    description: 'Our stress-free finance department that can find financial solutions to save you money.'
},
{
    icon: './assets/icon/f3.png',
    title: 'Transparent Pricing',
    description: 'Our stress-free finance department that can find financial solutions to save you money.'
},
{
    icon: './assets/icon/f4.png',
    title: 'Expert Car Service',
    description: 'Our stress-free finance department that can find financial solutions to save you money.'
}
];

const testimonials = [{
    name: 'Sekar',
    location: 'Coimbatore',
    rating: 4.5,
    review: 'Great range of bikes and quick service! Found the exact model I was looking for, and they delivered it on time. Customer support was responsive even after the sale.'
},
{
    name: 'Harish',
    location: 'Coimbatore',
    rating: 4.5,
    review: 'Great range of bikes and quick service! Found the exact model I was looking for, and they delivered it on time. Customer support was responsive even after the sale.'
}
];

const faqs = [{
    question: 'How long does it take to sell?',
    answer: 'The selling process typically takes 3-7 business days depending on the documentation and verification process.'
},
{
    question: 'Is there any inspection fee?',
    answer: 'No, we provide free inspection services for all vehicles. Our expert team will evaluate your car at no cost.'
},
{
    question: 'Do I need to visit your office?',
    answer: 'Not necessarily. We offer doorstep services for inspection and documentation. You can complete the entire process from your home.'
}
];

// Load Functions for Sellhome.php sections (if they are still intended to be in detail.js)
function loadTopRatedCars() {
    const container = document.getElementById('topRatedCarsCarousel');
    if (container) {
        let htmlContent = '';
        topRatedCarsData.forEach(car => {
            htmlContent += `
                <div class="card-col">
                    <div class="card rounded-top-5 h-100 shadow-sm car-card">
                        <img src="${car.image}" class="card-img-top " alt="${car.title}">
                        <div class="card-body">
                            <h5 class="card-title car-name">${car.title}</h5>
                            <div class="d-flex flex-wrap gap-2 mb-2">
                                <span class="badge text-purple-btn">${car.mileage}</span>
                                <span class="badge text-purple-btn">${car.fuel}</span>
                                <span class="badge text-purple-btn">${car.transmission}</span>
                                <span class="badge text-purple-btn">${car.owner}</span>
                            </div>
                            <h4 class="mb-1">${car.price}</h4>
                            <p class="text-muted">EMI: ${car.emi}</p>
                        </div>
                    </div>
                </div>
            `;
        });
        container.innerHTML = htmlContent;

        document.querySelectorAll('#topRatedCarsCarousel .car-card').forEach(card => {
            card.addEventListener('click', function() {
                const carName = this.querySelector('.car-name').textContent;
                console.log(`Viewing details for ${carName}`);
            });
        });
    }
}

function loadProcessOfSellingCars() {
    const container = document.getElementById('processOfSellingCarsContainer');
    if (container) {
        let htmlContent = '';
        processStepsData.forEach(step => {
            htmlContent += `
                <div class="card-col">
                <div class=" position-absolute bottom-2 z-3 p-3 fw-bold mb-3 process-number" >${step.number}</div>
                    <div class="card position-relative rounded-top-4 shadow-sm car-card">
                        <img src="${step.image}" class="card-img-top "
                            style="height: object-fit: contain;" alt="${step.alt}">
                        <div class="card-body p-3">
                            <h5 class="card-title text-purple process-title">${step.title}</h5>
                            <p class="card-text">${step.description}</p>
                        </div>
                    </div>
                </div>
            `;
        });
        container.innerHTML = htmlContent;

        document.querySelectorAll('#processOfSellingCarsContainer .process-card').forEach(card => {
            card.addEventListener('click', function() {
                const title = this.querySelector('.process-title').textContent;
                console.log(`Learn more about: ${title}`);
            });
        });
    }
}

function loadWhyTrueMotors() {
    const container = document.getElementById('whyTrueMotorsContainer');
    if (container) {
        let htmlContent = '';
        whyTrueMotorsData.forEach(item => {
            htmlContent += `
                <div class="card-col" style="width: 18rem;">
                    <div class="card h-100 car-card">
                        <img style="object-fit: cover;" src="${item.image}" class="card-img-top" alt="${item.title}">
                            <div class="card-body">
                                <h5 class="card-title text-purple car-name">${item.title}</h5>
                            </div>
                    </div>
                </div>
            `;
        });
        container.innerHTML = htmlContent;

        document.querySelectorAll('#whyTrueMotorsContainer .benefit-card').forEach(card => {
            card.addEventListener('click', function() {
                const title = this.querySelector('.benefit-title').textContent;
                console.log(`Learn more about: ${title}`);
            });
        });
    }
}

function loadFeatures() {
    let featuresHTML = '';
    features.forEach(function(feature) {
        featuresHTML += `
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="feature-card m-auto shadow-none border-none bg-transparent rounded-3">
                    <img src="${feature.icon}" class="feature-icon-img feature-icon" alt="${feature.title} icon">
                    <h5 class="mb-3">${feature.title}</h5>
                    <p class="text-muted">${feature.description}</p>
                </div>
            </div>
        `;
    });
    $('#features-container').html(featuresHTML);
}

function loadTestimonials() {
    let testimonialsHTML = '';
    testimonials.forEach(function(testimonial) {
        let stars = '';
        for (let i = 0; i < Math.floor(testimonial.rating); i++) {
            stars += '<i class="fas fa-star"></i>';
        }
        if (testimonial.rating % 1 !== 0) {
            stars += '<i class="fas fa-star-half-alt"></i>';
        }

        testimonialsHTML += `
            <div class="col-lg-6 col-md-12">
                <div class="testimonial-card">
                    <div class="d-flex align-items-center mb-3">
                        <div class=" text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                            <i class="h2">🏍️</i>
                        </div>
                        <div>
                            <h6 class="mb-0 text-primary ">${testimonial.name} - ${testimonial.location}</h6>
                        </div>
                    </div>
                    <div class=" d-flex align-content-center mb-3">
                    rating: <span class="rating ms-2 mb-0">
                        ${stars} ( ${testimonial.rating}/5) </span>
                    </div>
                    <p class="text-muted">"${testimonial.review}"</p>
                </div>
            </div>
        `;
    });
    $('#testimonials-container').html(testimonialsHTML);
}

function loadFAQs() {
    let faqHTML = '';
    faqs.forEach(function(faq, index) {
        faqHTML += `
            <div class="faq-item">
                <div class="faq-header" data-bs-toggle="collapse" data-bs-target="#faq-${index}">
                    <span class="">${index + 1}. ${faq.question}</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div id="faq-${index}" class="collapse">
                    <div class="faq-content">
                        <p class="mb-0 text-muted">${faq.answer}</p>
                    </div>
                </div>
            </div>
        `;
    });
    $('#faqAccordion').html(faqHTML); // Changed to #faqAccordion
}

// Load Cars for Comparison Section (Popular Car Comparisons & Compare Cars by BodyType)
function loadComparisonCars() {
    const cars = [ // This data is for the popular comparison section
        {
            car1: {
                brand: 'Maruti Suzuki',
                model: 'Swift',
                price: '6.36 Lakh',
                fuel: 'Petrol',
                showroom: 'Ex Showroom Price',
                image: './assets/image/car1.png'
            },
            car2: {
                brand: 'Hyundai',
                model: 'i10 Nios Sportz 1.2',
                price: '8.49 Lakh',
                fuel: 'Petrol',
                showroom: 'Ex Showroom Price',
                image: './assets/image/car2.png'
            }
        },
        {
            car1: {
                brand: 'Maruti Suzuki',
                model: 'Baleno',
                price: '7.50 Lakh',
                fuel: 'Petrol',
                showroom: 'Ex Showroom Price',
                image: './assets/image/top2.png'
            },
            car2: {
                brand: 'Honda',
                model: 'City',
                price: '10.00 Lakh',
                fuel: 'Petrol',
                showroom: 'Ex Showroom Price',
                image: './assets/image/honda_city.png'
            }
        },
        {
            car1: {
                brand: 'Hyundai',
                model: 'Creta',
                price: '12.00 Lakh',
                fuel: 'Petrol',
                showroom: 'Ex Showroom Price',
                image: './assets/image/hyundai_creta.png'
            },
            car2: {
                brand: 'Tata',
                model: 'Nexon EV',
                price: '14.50 Lakh',
                fuel: 'Electric',
                showroom: 'Ex Showroom Price',
                image: './assets/image/tata_nexon_ev.png'
            }
        }
    ];

    let carsHTML = '';
    cars.forEach(function(pair, index) {
        carsHTML += `
            <div class="compare-card position-relative d-flex flex-wrap overflow-hidden shadow rounded-top-3 rounded-bottom-5">
                <div class="car-details-wrapper border-bottom flex-grow-1 ">
                    <div class="car-image rounded-0"><img src="${pair.car1.image}" class="bg-black w-100" alt=""></div>
                    <div class="p-3 bg-transparent">
                        <h6 class="fw-bold mb-1">${pair.car1.brand}</h6>
                        <p class="mb-1 text-muted">${pair.car1.model}</p>
                        <div class="">₹ ${pair.car1.price}</div>
                        <small class="text-muted mt-2 d-block">${pair.car1.fuel}</small>
                        <small class="text-muted d-block">${pair.car1.showroom}</small>
                    </div>
                </div>

                <div class="compare-separator position-absolute start-50 translate-middle-x" style=" top:20%; z-index: 10;">
                    <div class="bg-purple rounded-circle p-2 d-flex justify-content-center align-items-center" style="background-color: #742B88; width: 44px; height: 44px;">
                        <img src="./assets/icon/Swap.png" class="w-100" alt="Swap Icon">
                    </div>
                </div>

                <div class="car-details-wrapper border-bottom flex-grow-1">
                    <div class="car-image rounded-0"><img src="${pair.car2.image}" class="bg-black w-100" alt=""></div>
                    <div class="p-3 bg-transparent">
                        <h6 class="fw-bold mb-1">${pair.car2.brand}</h6>
                        <p class="mb-1 text-muted">${pair.car2.model}</p>
                        <div class="">₹ ${pair.car2.price}</div>
                        <small class="text-muted mt-2 d-block">${pair.car2.fuel}</small>
                        <small class="text-muted d-block">${pair.car2.showroom}</small>
                    </div>
                </div>
            </div>
        `;
    });
    // Apply to both carousels that use the .cars-container class
    $('.cars-container').html(carsHTML);
    console.log('Popular comparison cars loaded.');
}


// --- Document Ready / DOMContentLoaded Listener ---
document.addEventListener('DOMContentLoaded', function () {
    console.log('DOMContentLoaded fired. Initializing page functions.');
    // Initialize car selection modal with brands
    populateBrands(); // This is the first call to populate brands

    // Search functionality for car comparison modal
    $('#searchInput').on('keyup', function() {
        const searchTerm = $(this).val().toLowerCase();
        if ($('#brandSelection').is(':visible')) {
            filterBrands(searchTerm);
        } else if ($('#modelSelection').is(':visible')) {
            filterModels(searchTerm);
        } else if ($('#variantSelection').is(':visible')) {
            filterVariants(searchTerm);
        }
    });

    // Handle add car button click
    $(document).on('click', '.add-car-btn', function () {
        currentCarSlot = $(this).data('car-slot');
        openCarSelector(currentCarSlot); // Call openCarSelector directly
    });

    // Handle Start Comparison button click
    document.getElementById('startComparisonBtn').addEventListener('click', function () {
        if (selectedCar1 && selectedCar2) {
            displayComparison();
        } else {
            console.log('Please select both cars to compare!');
        }
    });

    // Handle category card clicks
    document.querySelectorAll('.category-card').forEach(card => {
        card.addEventListener('click', function () {
            const category = this.dataset.category;
            loadCategoryCars(category);
            // Remove active class from all category cards and add to the clicked one
            document.querySelectorAll('.category-card').forEach(c => c.classList.remove('active'));
            this.classList.add('active');
        });
    });

    // Initial load of hatchback cars for the category section
    loadCategoryCars('hatchback'); // Ensure an initial category is loaded

    // Header Hide on Scroll (from header_footer.js)
    var lastScrollTop = 0;
    var header = document.querySelector('header');
    var headerHeight = header ? header.offsetHeight : 0;
    var scrollThreshold = 5;

    window.addEventListener("scroll", function () {
        var currentScroll = window.pageYOffset || document.documentElement.scrollTop;

        if (currentScroll > headerHeight && Math.abs(currentScroll - lastScrollTop) > scrollThreshold) {
            if (currentScroll > lastScrollTop) {
                header.classList.add('header-hidden');
            } else {
                header.classList.remove('header-hidden');
            }
        } else if (currentScroll <= headerHeight) {
            header.classList.remove('header-hidden');
        }

        lastScrollTop = currentScroll;
    });

    // Show search bar once & hide icon after click (from header_footer.js)
    if (typeof jQuery !== 'undefined') {
        $('#toggleSearch').on('click', function () {
            $('#searchForm').removeClass('d-none');
            $(this).addClass('d-none');
        });
    } else {
        console.warn('jQuery not loaded — search icon will not function');
    }

    // Dynamic Loading for Top Rated Cars (for Sellhome.php, if included)
    loadTopRatedCars();

    // Load Process of Selling Cars (for Sellhome.php, if included)
    loadProcessOfSellingCars();

    // Load Why True Motors (for Sellhome.php, if included)
    loadWhyTrueMotors();

    // Load Features (for Sellhome.php, if included)
    loadFeatures();

    // Load Testimonials (for Sellhome.php, if included)
    loadTestimonials();

    // Load FAQs (for Sellhome.php, if included)
    loadFAQs();

    // Load Cars for Comparison Section (for compare_page.php's popular comparisons)
    loadComparisonCars();


    // FAQ Toggle Animation
    $(document).on('click', '.faq-header', function() {
        const icon = $(this).find('i');
        // Toggle current icon
        if (icon.hasClass('fa-chevron-down')) {
            icon.removeClass('fa-chevron-down').addClass('fa-chevron-up');
        } else {
            icon.removeClass('fa-chevron-up').addClass('fa-chevron-down');
        }
    });

    // Car card click event for all car cards (including top rated and comparison)
    $(document).on('click', '.car-card', function() {
        const carName = $(this).find('.car-name').length ? $(this).find('.car-name').text() : $(this).find('h5').text();
        const carModel = $(this).find('.card-text').first().text();
        console.log(`You clicked on ${carName} ${carModel}`);
    });

    // Process card click event (using event delegation)
    $(document).on('click', '.process-card', function() {
        const title = $(this).find('.process-title').text();
        console.log(`Learn more about: ${title}`);
    });

    // Benefit card click event (using event delegation)
    $(document).on('click', '.benefit-card', function() {
        const title = $(this).find('.benefit-title').text();
        console.log(`Learn more about: ${title}`);
    });

    // Feature card hover effects
    $('.feature-card').hover(
        function() {
            $(this).find('.feature-icon').css('transform', 'scale(1.1)');
        },
        function() {
            $(this).find('.feature-icon').css('transform', 'scale(1)');
        }
    );
});
