@extends('layout.template')
@section('extern-css')
    <title>{{ $title }}</title>
    

    <style>
        label.error {
            color: #dc3545;
            font-size: 14px;
        }
    </style>
@endsection
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb px-4 pt-2">
            <li class="breadcrumb-item"><a class="text-red-c" href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
            <li class="breadcrumb-item active fs-6 " aria-current="page">Career</li>

        </ol>
    </nav>

    <section class="">
        <div class="container">
            <h1>CAREER </h1>

            <p class="short-desc text-center">We are a publishing house, and our success is determined by the calibre of the
                people we work with. As a result, we make continuous efforts to improve the skill set of our employees and
                offer them an environment congenial for personal and professional growth. Our human resource policies are
                liberal, transparent, and among the best in the industry.</p>
            <div class="row align-items-stretch py-5 flex-wrap-reverse">

                <div class="col-12 col-md-6  align-self-center mt-smc-2">
                    <h3 class="text-rale text-red-c"> Working Culture </h3>
                    <p class="text-justify"> Book publishing is a challenging domain that necessitates a significant amount
                        of participation. As a result, all Team BFC members are encouraged to take ownership of the projects
                        they are working upon.</p>
                    <h3 class="text-rale text-red-c"> Professional Growth </h3>
                    <p class="text-justify"> The performance appraisal system in the organisation ensures that the top
                        performers are appropriately rewarded. Those who perform well are offered bigger roles, setting a
                        good example for others to follow.</p>
                </div>

                <div class="col-12 col-md-6 ">
                    <img class="img-fluid rounded" src="{{ url('assets/img/other/1.webp') }}" alt="" srcset="">
                </div>

            </div>
        </div>

    </section>
    <section class="bg-light-blue">
        <div class="container">
            <div class="row align-items-stretch py-5">
                <div class="col-12 col-md-6 ">
                    <img class="img-fluid rounded" src="{{ url('assets/img/other/2.webp') }}" alt="" srcset="">
                </div>
                <div class="col-12 col-md-6  align-self-center mt-smc-2">
                    <h3 class="text-rale text-red-c"> Job Security & Satisfaction</h3>
                    <p class="text-justify"> The BFC Group has an average attrition rate of 4.5 years. This demonstrates
                        that BFC Publications does not believe in "survival of the fittest." People who are looking for
                        stability prefer working with us. Also, the organisation has an effective grievance redressal
                        system, overseen by none other than the CEO.</p>
                    <h3 class="text-rale text-red-c"> Personal Growth </h3>
                    <p class="text-justify"> The company places great value on its employees. As a result, frequent training
                        programmes and corporate activities are held to build and improve their inter-personal skills.</p>
                </div>



            </div>


        </div>

    </section>
    <section class="">
        <div class="container">

            <div class="row align-items-stretch py-5 flex-wrap-reverse">

                <div class="col-12 col-md-6  align-self-center mt-smc-2">
                    <h3 class="text-rale text-red-c"> Remuneration </h3>
                    <p class="text-justify"> BFC Publications believes that everyone should have equal access to
                        opportunities. The pay offered here is among the best in the industry. In addition to fixed income,
                        the company also offers substantial incentives as well.</p>
                    <h3 class="text-rale text-red-c"> Workplace Atmosphere </h3>
                    <p class="text-justify"> The Company has a formal workplace culture with emphasis on productivity and
                        code of conduct. Despite this, management strives to achieve a delicate balance between work and
                        play by organising a variety of off-sites and other informal events.</p>
                </div>

                <div class="col-12 col-md-6 ">
                    <img class="img-fluid rounded" src="{{ url('assets/img/other/3.webp') }}" alt="" srcset="">
                </div>

            </div>
        </div>

    </section>
    <section class="about ">
        <div class="container">

            <div class="row align-items-stretch py-5">

                <div class="col-12 col-md-5  ">

                    <h4>Current Openings</h4>
                    <hr>
                    <div class="align-items-center flex-column d-flex text-center">
                        <div class="col-md-7  col-12 mb-4 opening">
                            <a href="#">
                                <h6 class="mb-0">DTP OPERATOR</h6>
                            </a>
                        </div>
                        <div class="col-md-7 col-12  mb-4 opening">
                            <a href="#">
                                <h6 class="mb-0">PROOFREADER</h6>
                            </a>
                        </div>
                        <div class="col-md-7 col-12  opening">
                            <a href="#">
                                <h6 class="mb-0">PUBLISHING CONSULTANT</h6>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="col-12 col-md-7 mt-smc-2">
                    <h4>Interested ?</h4>
                    <hr>
                    <form id="career_page_form" class="row g-3">
                        <div class="col-md-6">
                            <label for="inputname" class="form-label">Name</label>
                            <input type="text" class="form-control" id="inputname" name="inputname"
                                placeholder="Enter Your Name">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail" name="inputEmail"
                                placeholder="Enter Your Email">
                        </div>

                        <div class="col-md-6">
                            <label for="inputnumber" class="form-label">Phone Number</label>
                            <input type="number" class="form-control" id="inputnumber" name="inputnumber"
                                placeholder="Enter Your Phone Number">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPost" class="form-label">Post Applied for</label>
                            <input type="text" class="form-control" id="inputPost" name="inputPost"
                                placeholder="Enter Post">
                        </div>
                        <div class="col-12">
                            <input type="file" class="form-control" id="file" name="file"
                                placeholder="1234 Main St">
                        </div>
                        <div class="col-12">
                            <input type="checkbox" name="checkbox" id="checkbox">
                            <span class="checkbox_content"> I, hereby accord my consent to process my above mentioned personal data by BFC Publications Pvt. Ltd. for the purpose of employment, in accordance with the provisions of DPDP Act 2023.
    </span> <br>
  
                            <span class="text-danger" id="check_box_err"> </span>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-custom">Submit</button>
                        </div>
                    </form>




                </div>

            </div>
        </div>

    </section>
@endsection
@section('extern-js')
    <script src="{{ url('customjs/mail.js') }}"></script>
@endsection
