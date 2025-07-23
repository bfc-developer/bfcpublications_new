@extends('layout.template')
@section('extern-css')
    <title>{{ $title }}</title>
   
@endsection
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb px-4 py-2">
            <li class="breadcrumb-item"><a class="text-red-c" href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
            <li class="breadcrumb-item active fs-6 " aria-current="page">Terms and Conditions</li>
        </ol>
    </nav>
    <section class="mb-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-text">
                        <h3 class="pb-3">Terms and Conditions</h3>
                        <p>Welcome to BFC Publications!<br>
                            These terms and conditions outline the rules and regulations for the use of BFC Publications Pvt
                            Ltd's Website, located at bfcpublications.com.<br>
                            By accessing this website we assume you accept these terms and conditions. Do not continue to
                            use BFC Publications if you do not agree to take all of the terms and conditions stated on this
                            page.<br>
                            The following terminology applies to these Terms and Conditions, Privacy Statement and
                            Disclaimer Notice and all Agreements: "Client", "You" and "Your" refers to you, the person log
                            on this website and compliant to the Company’s terms and conditions. "The Company", "Ourselves",
                            "We", "Our" and "Us", refers to our Company. "Party", "Parties", or "Us", refers to both the
                            Client and ourselves. All terms refer to the offer, acceptance and consideration of payment
                            necessary to undertake the process of our assistance to the Client in the most appropriate
                            manner for the express purpose of meeting the Client’s needs in respect of provision of the
                            Company’s stated services, in accordance with and subject to, prevailing law of Netherlands. Any
                            use of the above terminology or other words in the singular, plural, capitalization and/or
                            he/she or they, are taken as interchangeable and therefore as referring to same.</p>
                    </div>
                    <hr class="pb-2">
                    <div class="page-text">
                        <h3 class="pb-3">Cookies</h3>
                        <p>We employ the use of cookies. By accessing BFC Publications, you agreed to use cookies in
                            agreement with the BFC Publications Pvt Ltd's Privacy Policy.<br> Most interactive websites use
                            cookies to let us retrieve the user’s details for each visit. Cookies are used by our website to
                            enable the functionality of certain areas to make it easier for people visiting our website.
                            Some of our affiliate/advertising partners may also use coo</p>
                    </div>
                    <hr class="pb-2">
                    <div class="page-text">
                        <h3 class="pb-3">License</h3>
                        <p>Unless otherwise stated, BFC Publications Pvt Ltd and/or its licensors own the intellectual
                            property rights for all material on BFC Publications. All intellectual property rights are
                            reserved. You may access this from BFC Publications for your own personal use subjected to
                            restrictions set in these terms and conditions.<br> You must not:</p>
                        <ul class="list-unstyled">
                            <li class="font-weight-500"><i class="fa fa-check-circle"></i> Republish material from BFC
                                Publications.</li>
                            <li class="font-weight-500"><i class="fa fa-check-circle"></i> Sell, rent or sub-license
                                material from BFC Publications.</li>
                            <li class="font-weight-500"><i class="fa fa-check-circle"></i> Reproduce, duplicate or copy
                                material from BFC Publications.</li>
                            <li class="font-weight-500"><i class="fa fa-check-circle"></i> Redistribute content from BFC
                                Publications.</li>
                        </ul>
                        <p>Parts of this website offer an opportunity for users to post and exchange opinions and
                            information in certain areas of the website. BFC Publications Pvt Ltd does not filter, edit,
                            publish or review Comments prior to their presence on the website. Comments do not reflect the
                            views and opinions of BFC Publications Pvt Ltd,its agents and/or affiliates. Comments reflect
                            the views and opinions of the person who post their views and opinions. To the extent permitted
                            by applicable laws, BFC Publications Pvt Ltd shall not be liable for the Comments or for any
                            liability, damages or expenses caused and/or suffered as a result of any use of and/or posting
                            of and/or appearance of the Comments on this website.</p>
                        <p>BFC Publications Pvt Ltd reserves the right to monitor all Comments and to remove any Comments
                            which can be considered inappropriate, offensive or causes breach of these Terms and
                            Conditions.<br> You warrant and represent that:</p>
                        <ul class="list-unstyled">
                            <li class="font-weight-500"><i class="fa fa-check-circle"></i> You are entitled to post the
                                Comments on our website and have all necessary licenses and consents to do so;</li>
                            <li class="font-weight-500"><i class="fa fa-check-circle"></i> The Comments do not invade any
                                intellectual property right, including without limitation copyright, patent or trademark of
                                any third party;</li>
                            <li class="font-weight-500"><i class="fa fa-check-circle"></i> The Comments do not contain any
                                defamatory, libelous, offensive, indecent or otherwise unlawful material which is an
                                invasion of privacy</li>
                            <li class="font-weight-500"><i class="fa fa-check-circle"></i> The Comments will not be used to
                                solicit or promote business or custom or present commercial activities or unlawful activity.
                            </li>
                        </ul>
                        <p>You hereby grant BFC Publications Pvt Ltd a non-exclusive license to use, reproduce, edit and
                            authorize others to use, reproduce and edit any of your Comments in any and all forms, formats
                            or media.</p>
                    </div>
                    <hr class="pb-2">
                    <div class="page-text">
                        <h3 class="pb-3">Hyperlinking to our Content</h3>
                        <p>The following organizations may link to our Website without prior written approval:</p>
                        <ul class="list-unstyled">
                            <li class="font-weight-500"><i class="fa fa-check-circle"></i> Government agencies</li>
                            <li class="font-weight-500"><i class="fa fa-check-circle"></i> Search engines;</li>
                            <li class="font-weight-500"><i class="fa fa-check-circle"></i> News organizations;</li>
                            <li class="font-weight-500"><i class="fa fa-check-circle"></i> Online directory distributors may
                                link to our Website in the same manner as they hyperlink to the Websites of other listed
                                businesses; and</li>
                            <li class="font-weight-500"><i class="fa fa-check-circle"></i> System wide Accredited Businesses
                                except soliciting non-profit organizations, charity shopping malls, and charity fundraising
                                groups which may not hyperlink to our Web site.</li>
                        </ul>
                        <p>These organizations may link to our home page, to publications or to other Website information so
                            long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship,
                            endorsement or approval of the linking party and its products and/or services; and (c) fits
                            within the context of the linking party’s site.<br> We may consider and approve other link
                            requests from the following types of organizations:</p>
                        <ul class="list-unstyled">
                            <li class="font-weight-500"><i class="fa fa-check-circle"></i> commonly-known consumer and/or
                                business information sources;</li>
                            <li class="font-weight-500"><i class="fa fa-check-circle"></i> dot.com community sites;</li>
                            <li class="font-weight-500"><i class="fa fa-check-circle"></i> associations or other groups
                                representing charities;</li>
                            <li class="font-weight-500"><i class="fa fa-check-circle"></i> online directory distributors;
                            </li>
                            <li class="font-weight-500"><i class="fa fa-check-circle"></i> internet portals;</li>
                            <li class="font-weight-500"><i class="fa fa-check-circle"></i> accounting, law and consulting
                                firms; and</li>
                            <li class="font-weight-500"><i class="fa fa-check-circle"></i> educational institutions and
                                trade associations.</li>
                        </ul>
                        <p>We will approve link requests from these organizations if we decide that: (a) the link would not
                            make us look unfavorably to ourselves or to our accredited businesses; (b) the organization does
                            not have any negative records with us; (c) the benefit to us from the visibility of the
                            hyperlink compensates the absence of BFC Publications Pvt Ltd; and (d) the link is in the
                            context of general resource information.<br> These organizations may link to our home page so
                            long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship,
                            endorsement or approval of the linking party and its products or services; and (c) fits within
                            the context of the linking party’s site.<br> If you are one of the organizations listed in
                            paragraph 2 above and are interested in linking to our website, you must inform us by sending an
                            e-mail to BFC Publications Pvt Ltd. Please include your name, your organization name, contact
                            information as well as the URL of your site, a list of any URLs from which you intend to link to
                            our Website, and a list of the URLs on our site to which you would like to link. Wait 2-3 weeks
                            for a response.<br> Approved organizations may hyperlink to our Website as follows:</p>
                        <ul class="list-unstyled">
                            <li class="font-weight-500"><i class="fa fa-check-circle"></i> By use of our corporate name;
                                or
                            </li>
                            <li class="font-weight-500"><i class="fa fa-check-circle"></i> By use of the uniform resource
                                locator being linked to; or</li>
                            <li class="font-weight-500"><i class="fa fa-check-circle"></i> By use of any other description
                                of our Website being linked to that makes sense within the context and format of content on
                                the linking party’s site.</li>
                        </ul>
                        <p>No use of BFC Publications Pvt Ltd's logo or other artwork will be allowed for linking absent a
                            trademark license agreement.</p>
                    </div>
                    <hr class="pb-2">
                    <div class="page-text">
                        <h3 class="pb-3">iFrames</h3>
                        <p>Without prior approval and written permission, you may not create frames around our Webpages that
                            alter in any way the visual presentation or appearance of our Website.</p>
                    </div>
                    <hr class="pb-2">
                    <div class="page-text">
                        <h3 class="pb-3">Content Liability</h3>
                        <p>We shall not be hold responsible for any content that appears on your Website. You agree to
                            protect and defend us against all claims that is rising on your Website. No link(s) should
                            appear on any Website that may be interpreted as libelous, obscene or criminal, or which
                            infringes, otherwise violates, or advocates the infringement or other violation of, any third
                            party rights.</p>
                    </div>
                    <hr class="pb-2">
                    <div class="page-text">
                        <h3 class="pb-3">Cancellation Refund Policy</h3>
                        <p>We allow cancellations if the service has not been commenced or the order has not been shipped
                            for a full refund minus applicable charges, if any.</p>
                    </div>
                    <hr class="pb-2">
                    <div class="page-text">
                        <h3 class="pb-3">Your Privacy</h3>
                        <p>Please read Privacy Policy</p>
                    </div>
                    <hr class="pb-2">
                    <div class="page-text">
                        <h3 class="pb-3">Reservation of Rights</h3>
                        <p>We reserve the right to request that you remove all links or any particular link to our Website.
                            You approve to immediately remove all links to our Website upon request. We also reserve the
                            right to amen these terms and conditions and it’s linking policy at any time. By continuously
                            linking to our Website, you agree to be bound to and follow these linking terms and conditions.
                        </p>
                    </div>
                    <hr class="pb-2">
                    <div class="page-text">
                        <h3 class="pb-3">Removal of links from our website</h3>
                        <p>If you find any link on our Website that is offensive for any reason, you are free to contact and
                            inform us any moment. We will consider requests to remove links but we are not obligated to or
                            so or to respond to you directly.<br> We do not ensure that the information on this website is
                            correct, we do not warrant its completeness or accuracy; nor do we promise to ensure that the
                            website remains available or that the material on the website is kept up to date.</p>
                    </div>
                    <hr class="pb-2">
                    <div class="page-text">
                        <h3 class="pb-3">Disclaimer</h3>
                        <p>To the maximum extent permitted by applicable law, we exclude all representations, warranties and
                            conditions relating to our website and the use of this website. Nothing in this disclaimer will:
                        </p>
                        <ul class="list-unstyled">
                            <li class="font-weight-500"><i class="fa fa-check-circle"></i> limit or exclude our or your
                                liability for death or personal injury;</li>
                            <li class="font-weight-500"><i class="fa fa-check-circle"></i> limit or exclude our or your
                                liability for fraud or fraudulent misrepresentation;</li>
                            <li class="font-weight-500"><i class="fa fa-check-circle"></i> imit any of our or your
                                liabilities in any way that is not permitted under applicable law; or</li>
                            <li class="font-weight-500"><i class="fa fa-check-circle"></i> exclude any of our or your
                                liabilities that may not be excluded under applicable law.</li>
                        </ul>
                        <p>The limitations and prohibitions of liability set in this Section and elsewhere in this
                            disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising
                            under the disclaimer, including liabilities arising in contract, in tort and for breach of
                            statutory duty.<br> As long as the website and the information and services on the website are
                            provided free of charge, we will not be liable for any loss or damage of any nature.</p>
                    </div>
                    <hr class="pb-2">
                </div>
            </div>
        </div>
    </section>
@endsection
