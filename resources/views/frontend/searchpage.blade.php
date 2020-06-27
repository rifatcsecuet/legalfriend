@include('custom.header')


    <section class="section section-search">
        <div class="container-fluid">
            <div class="banner-wrapper">
                <div class="banner-header text-center">
                    <h1>Search Lawyer, Make an Appointment</h1>
                    <p>Discover the best lawyers, tax consultants & legal advisors nearest to you.</p>
                </div>

                <!-- Search -->
                <div class="search-box">
                    <form action="{{ route('search.lawyerProfile') }}" method="get">
                        <div class="form-group search-location">
                            <select type="text" name="area" class="form-control" placeholder="Select Location">

                                

                            </select>
                            <span class="form-text">Based on your Location</span>
                        </div>
                        <div class="form-group search-info">
                            <select type="text" class="form-control" placeholder="Search Lawyers, tax consultants & legal advisors Etc">
                           


                           
                            </select>
                            <span class="form-text">Ex : Cheque Bounce or Family Property Dispute etc</span>
                        </div>
                        <button type="submit" class="btn btn-primary search-btn"><i class="fas fa-search"></i> <span>Search</span></button>
                    </form>
                </div>
                <!-- /Search -->

            </div>
        </div>
    </section>
    <!-- /Home Banner -->



@include('custom.footer')