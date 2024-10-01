{{-- @extends('layouts.app') --}}

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Peserta Pendaftar</span>
                        <span class="info-box-number">
                            {{ $totalPendaftar }}
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user-graduate"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Alumni</span>
                        <span class="info-box-number">{{ $totalAlumni }}</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-blog"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Content Blog</span>
                        <span class="info-box-number">{{ $totalBlogPosts }}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <!-- Grafik Pendaftar -->
                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Grafik Pendaftar</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Grafik Blog Posts -->
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Grafik Blog Posts</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Donut Chart
    var donutChartCanvas = document.getElementById('donutChart').getContext('2d')
    var donutData = {
        labels: ['Pendaftar', 'Alumni'],
        datasets: [{
            data: [{{ $totalPendaftar }}, {{ $totalAlumni }}],
            backgroundColor: ['#f56954', '#00a65a'],
        }]
    }
    new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: {
            responsive: true,
            maintainAspectRatio: false,
        }
    })

    // Bar Chart
    var barChartCanvas = document.getElementById('barChart').getContext('2d')
    var barChartData = {
        labels: {!! json_encode($blogMonths) !!},
        datasets: [{
            label: 'Blog Posts',
            backgroundColor: 'rgba(60,141,188,0.9)',
            borderColor: 'rgba(60,141,188,0.8)',
            pointRadius: false,
            pointColor: '#3b8bba',
            pointStrokeColor: 'rgba(60,141,188,1)',
            pointHighlightFill: '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data: {!! json_encode($blogPostCounts) !!}
        }]
    }
    new Chart(barChartCanvas, {
        type: 'bar',
        data: barChartData,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    })
})
</script>
@endpush
