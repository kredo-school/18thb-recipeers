@extends('layouts.app')

@section('title', 'Admin Home')

@section('content')

    <div class="container">
        <div class="row">
            <!-- admin menu -->
            <div class="col-lg-2 col-md-2 col-12 my-5 mr-2">
                <div class="list-group">
                    <a href="{{ route('admin.home') }}" class="btn btn-main list-group-item mb-3">
                        Admin Home
                    </a>
                    <a href="{{ route('admin.users.show') }}" class="btn btn-sub list-group-item mb-3">
                        All Users
                    </a>
                    <a href="{{ route('admin.recipes.show') }}" class="btn btn-sub list-group-item mb-3">
                        All Recipes
                    </a>
                    <a href="{{ route('admin.inquiries.show') }}" class="btn btn-sub list-group-item mb-3">
                        All Inquiries
                    </a>
                    {{-- <a href="{{ route('admin.') }}" class="btn btn-sub list-group-item mb-3">
                        All Ads
                    </a> --}}
                </div>
            </div>
            <div class="col-lg-10 col-md-10 col-12 ps-5 my-5">
                {{-- Upper half --}}
                <div class="mb-5">
                    <h3 class="color1 h3 my-3">
                        <i class="fa-solid fa-person fs-3"></i>&nbsp;Total Numbers
                    </h3>
                    <div class="d-flex justify-content-between">
                        {{-- Users count --}}
                        <a href="{{ route('admin.users.show') }}"  class="card input-color1 w-25 text-center py-3">
                            <div class="card-header bg-white border-0">
                                <span class="count fs-1">{{ $userCount }}</span>&nbsp; Users
                            </div>
                            <div class="card-body p-0 mb-2">
                                <i class="fa-solid fa-people-group fa-3x color1"></i>
                            </div>
                        </a>
                        {{-- Recipes count --}}
                        <a href="{{ route('admin.recipes.show') }}" class="card input-color1 w-25 text-center py-3">
                            <div class="card-header bg-white border-0">
                                <span class="count fs-1">{{ $recipeCount }}</span>&nbsp; Recipes
                            </div>
                            <div class="card-body p-0 mb-2">
                                <i class="fa-solid fa-utensils fa-3x color1"></i>
                            </div>
                        </a>
                        {{-- Inquiries count --}}
                        <a href="{{ route('admin.inquiries.show') }}" class="card input-color1 w-25 text-center py-3">
                            <div class="card-header bg-white border-0">
                                <span class="count fs-1">{{ $inquiryCount }}</span>&nbsp; Inquiries
                            </div>
                            <div class="card-body p-0 mb-2">
                                <i class="fa-regular fa-envelope fa-3x color1"></i>
                            </div>
                        </a>
                    </div>
                </div>

                {{-- Lower half --}}
                <div class="row g-5">
                    {{-- Sales graph --}}
                    <div class="col-6">
                        <h3 class="color1 h3 my-3">
                            <i class="fa-solid fa-chart-line fs-3"></i>&nbsp;Sales
                        </h3>
                        <div>
                            <canvas id="sales-chart" height=300></canvas>
                        </div>
                    </div>
                    {{-- World map --}}
                    <div class="col-6">
                        <h3 class="color1 h3 my-3">
                            <i class="fa-solid fa-map fs-3"></i>&nbsp;Map
                        </h3>
                        <div id="user-map" style="height: 400px;"></div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    {{-- World map --}}
    <script>
        // Initialize the map
        var map = L.map('user-map').setView([0, 0], 2);

        // Add the base map tiles
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Fetch GeoJSON data
        fetch('/data/countries.geojson')
        .then(response => response.json())
        .then(data => {
            // Loop through features in GeoJSON data
            data.features.forEach(function(country) {
                // Fetch user count for this country (replace with your actual endpoint)
                fetch(`/api/user-count?country=${country.properties.iso_a2}`)
                .then(response => response.json())
                .then(userCount => {
                    // Add user count property to GeoJSON data
                    country.properties.userCount = userCount;

                    // Create a marker for the country
                    var marker = L.marker([country.geometry.coordinates[1], country.geometry.coordinates[0]])
                        .bindPopup('<b>' + country.properties.name + '</b><br>User Count: ' + userCount)
                        .addTo(map);
                })
                .catch(error => {
                    console.error('Error fetching user count:', error);
                });
            });
        })
        .catch(error => {
            console.error('Error fetching GeoJSON data:', error);
        });
    </script>
 

    {{-- Sales graph --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.2"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-annotation@1.0.2"></script>
    <script>
        const ctx = document.getElementById('sales-chart').getContext('2d');
        const labels = ['May', 'June', 'July', 'August', 'September', 'Octber', 'November', 'December', 'January', 'Febuary', 'March', 'April'];
        const data = {
            labels,
            datasets: [{
                label: 'Sales (k USD)',
                data: [7.4, 8.9, 10.7, 14.2, 17.3, 21.4, 27.5, 35.1, 36.4, 37.2, 38.8, 39.7],
                backgroundColor: 'rgba(255, 181, 52, 0.2)',
                borderColor: 'rgba(255, 181, 52, 1)',
                borderWidth: 1.5
          }]
        };
        
        const config = {
            type: 'line',
            data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        position: 'left',
                        ticks: {
                            callback: function(value, index, values) {
                                return value;
                            }
                        }
                    }
                },
                plugins: {
                    tooltip: {
                        enabled: true,
                        callbacks: {
                            label: function(context) {
                                const value = context.parsed.y.toFixed(1);
                                return `Sales: $${value}k`;
                            }
                        },
                        backgroundColor: 'rgba(255, 255, 255, 0.8)',
                        borderColor: '#93D579',
                        borderWidth: 1,
                        titleColor: '#65B741',
                        titleFont: {
                            size: '16rem'
                        },
                        bodyColor: '#050505',
                        bodyFont: {
                            size: '14rem',
                            weight: 'normal'
                        },
                        displayColors: false,
                        padding: 10,
                        cornerRadius: 10,
                    }
                }
            }
        };
        
        new Chart(ctx, config);
    </script>
@endsection