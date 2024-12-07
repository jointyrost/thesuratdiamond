@push('styles')
<style>
    .diamond-details p {
        font-size: 16px;
        margin: 8px 0;
        color: #333;
    }
    .diamond-details p strong {
        font-weight: bold;
        color: #007bff;
    }
</style>
@endpush
@extends('layouts.main')


@section('content')
<main class="main-wrapper">
    <!-- Start Breadcrumb Area -->
    <div class="axil-breadcrumb-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="inner">
                        <ul class="axil-breadcrumb">
                            <li class="axil-breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="separator"></li>
                            <li class="axil-breadcrumb-item active" aria-current="page">Diamond Report</li>
                        </ul>
                        <h1 class="title">Diamond Report Details</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="inner">
                        <div class="bradcrumb-thumb">
                            <img src="{{asset('user/assets/images/logo/logo.png')}}" alt="Logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->

    <!-- Start Diamond Report Area -->
    <div class="axil-contact-page-area axil-section-gap">
        <div class="container">
            <div class="axil-contact-page">
                <div class="row row--30">
                    <div class="col-lg-8">
                        <div class="contact-form">
                            <h3 class="title mb--10">Enter Diamond Report Number</h3>
                            <p>Input the report number below to view detailed diamond information.</p>
                            <form id="report-form">
                                <div class="form-group">
                                    <label for="report-number">Report Number <span>*</span></label>
                                    <input type="text" id="report-number" name="report-number" required>
                                </div>
                                <button type="submit" class="axil-btn btn-bg-primary">View Report</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row row--30 mt--20" id="report-details" style="display:none;">
                    <div class="col-lg-12">
                        <h3 class="title">Diamond Report Details</h3>
                        <div id="diamond-info" class="diamond-details">
                            <!-- Diamond Details will be displayed here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Diamond Report Area -->
</main>
@endsection
@push('scripts')
<script>
    document.getElementById('report-form').addEventListener('submit', function(event) {
        event.preventDefault();
        const reportNumber = document.getElementById('report-number').value;
        if (reportNumber) {
            const apiUrl = `/proxy-diamond-report?report_number=${reportNumber}`;

            fetch(apiUrl)
                .then(response => response.json())
                .then(data => displayReportDetails(data[0]))
                .catch(error => console.error('Error fetching report:', error));
        }
    });

    function displayReportDetails(details) {
        const infoContainer = document.getElementById('diamond-info');
        const reportContainer = document.getElementById('report-details');
        
        infoContainer.innerHTML = `
            <p><strong>Report Number:</strong> ${details["REPORT NUMBER"]}</p>
            <p><strong>Report Date:</strong> ${details["REPORT DATE"]}</p>
            <p><strong>Description:</strong> ${details.DESCRIPTION}</p>
            <p><strong>Shape and Cut:</strong> ${details["SHAPE AND CUT"]}</p>
            <p><strong>Carat Weight:</strong> ${details["CARAT WEIGHT"]}</p>
            <p><strong>Color Grade:</strong> ${details["COLOR GRADE"]}</p>
            <p><strong>Clarity Grade:</strong> ${details["CLARITY GRADE"]}</p>
            <p><strong>Cut Grade:</strong> ${details["CUT GRADE"]}</p>
            <p><strong>Polish:</strong> ${details.POLISH}</p>
            <p><strong>Symmetry:</strong> ${details.SYMMETRY}</p>
            <p><strong>Measurements:</strong> ${details.Measurements}</p>
            <p><strong>Table Size:</strong> ${details["Table Size"]}</p>
            <p><strong>Crown Height:</strong> ${details["Crown Height"]}</p>
            <p><strong>Pavilion Depth:</strong> ${details["Pavilion Depth"]}</p>
            <p><strong>Girdle Thickness:</strong> ${details["Girdle Thickness"]}</p>
            <p><strong>Culet:</strong> ${details.Culet}</p>
            <p><strong>Total Depth:</strong> ${details["Total Depth"]}</p>
            <p><strong>Fluorescence:</strong> ${details.FLUORESCENCE}</p>
            <p><strong>Comments:</strong> ${details.COMMENTS}</p>
            <p><strong>Inscription(s):</strong> ${details["Inscription(s)"]}</p>
            <p><strong>PDF Report:</strong> <a href="https://api.igi.org/${details.REPORT1_PDF}" target="_blank">Download PDF</a></p>
        `;

        reportContainer.style.display = 'block';
    }
</script>

@endpush