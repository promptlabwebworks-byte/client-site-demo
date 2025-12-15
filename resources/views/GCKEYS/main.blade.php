<!DOCTYPE html>
<html class="js backgroundsize borderimage csstransitions fontface svg mathml details cors progressbar meter largeview wb-enable" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<style>
    body {
        transition: opacity ease-in 0.2s;
    }

    body[unresolved] {
        opacity: 0;
        display: block;
        overflow: hidden;
        position: relative;
    }
</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>{{ Auth::user()->name }}'s' account - Immigration, Refugees and Citizenship Canada</title>
    <link rel="shortcut icon" href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/resource/gcweb/assets/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="https://softwaresolutions.sbs/APPCSS/mainpagecodes/wet-boew.min.css">
    <link rel="stylesheet" href="https://softwaresolutions.sbs/APPCSS/mainpagecodes/theme.min.css">
    <link rel="stylesheet" href="https://softwaresolutions.sbs/APPCSS/mainpagecodes/jquery-ui.css">
    <link rel="stylesheet" href="https://softwaresolutions.sbs/APPCSS/mainpagecodes/wet-mycic.css" type="text/css">
    <link rel="stylesheet" href="https://softwaresolutions.sbs/APPCSS/mainpagecodes/font-awesome.css">
    <script src="https://softwaresolutions.sbs/APPCSS/mainpagecodes/en.min.js"></script>
    <script src="https://softwaresolutions.sbs/APPCSS/mainpagecodes/jquery.magnific-popup.min.js"></script>
    <script src="https://softwaresolutions.sbs/APPCSS/mainpagecodes/jquery-2.1.0.min.js"></script>
    <script src="https://softwaresolutions.sbs/APPCSS/mainpagecodes/jquery-ui-1.10.4.min.js"></script>
    <style type="text/css"></style>
</head>

<body data-new-gr-c-s-check-loaded="14.1242.0" data-gr-ext-installed="">
    <div id="wb-body">
        <script>
            MyCIC = function() {
                return {
                    locale: function() {
                        return {
                            resources: function() {
                                var items = {};
                                return {
                                    get: function(key) {
                                        if (items.hasOwnProperty(key)) {
                                            return items[key];
                                        } else {
                                            return key;
                                        }
                                    },
                                    add: function(key, value) {
                                        items[key] = value;
                                    }
                                };
                            }()
                        };
                    }()
                };
            }();
            MyCIC.locale.resources.add("btn.dialogContinue", "Continue");
            MyCIC.locale.resources.add("btn.dialogCancel", "Cancel");
            MyCIC.locale.resources.add("btn.dialogLogout", "Sign out");
            MyCIC.locale.resources.add("txt.dialogText",
                "If you continue, you will still be&nbsp;signed into&nbsp;your account&nbsp;and your privacy will no longer be protected.<br />If you have received a personal document checklist, you should print it for future reference. It outlines the steps you need to apply.<p>&nbsp;</p>"
                );
            MyCIC.locale.resources.add("txt.close", "text.close");
            MyCIC.locale.resources.add("label.expanded", "Expanded");
            MyCIC.locale.resources.add("label.collapsed", "Collapsed");
        </script>
        <nav role="navigation" aria-label="Skip navigation">
            <ul id="wb-tphp" class=" wb-disable-inited">
                <li class="wb-slc">
                    <a class="wb-sl" href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/home#wb-cont">Skip to main content</a>
                </li>
                <li class="wb-slc visible-sm visible-md visible-lg">
                    <a class="wb-sl" href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/home#wb-info">Skip to "About this site"</a>
                </li>
                <li class="wb-slc"><a class="wb-sl" href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/home?wbdisable=true">Basic HTML version</a></li>
            </ul>
        </nav>
        <!-- Start - Header -->
        <header role="banner">
            <div id="wb-bnr" class="container">
                <div class="row">
                    <section id="wb-lng" class="col-xs-3 col-sm-12 pull-right text-right">
                        <h2 class="wb-inv">Language selection</h2>
                        <ul class="list-inline mrgn-bttm-0">
                            <li><a hreflang="fr" class="languageSelector" lang="fr"
                                    href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/home?&amp;lang=fr">Français</a>
                            </li>
                        </ul>
                    </section>
                    <div class="brand col-xs-9 col-sm-5 col-md-4" property="publisher" resource="#wb-publisher"
                        typeof="GovernmentOrganization">
                        <a href="https://www.canada.ca/en.html" property="url"><img
                                src="https://softwaresolutions.sbs/APPCSS/mainpagecodes/sig-blk-en.svg" alt="Government of Canada"
                                property="logo"><span class="wb-inv"> / <span lang="fr">Gouvernement du
                                    Canada</span></span></a>
                        <meta property="name" content="Government of Canada">
                        <meta property="areaServed" typeof="Country" content="Canada">
                        <link property="logo" href="https://softwaresolutions.sbs/APPCSS/mainpagecodes/wmms-blk.svg">
                    </div>
                </div>
            </div>
            <nav role="navigation" aria-label="Main" class="gcweb-menu" typeof="SiteNavigationElement">
                <div class="container">
                    <h2 class="wb-inv">Menu</h2>
                    <button type="button" aria-haspopup="true" aria-expanded="false"
                        aria-label="Press the SPACEBAR to expand or the escape key to collapse this menu. Use the Up and Down arrow keys to choose a submenu item. Press the Enter or Right arrow key to expand it, or the Left arrow or Escape key to collapse it. Use the Up and Down arrow keys to choose an item on that level and the Enter key to access it.">
                        <span class="wb-inv">Main </span>
                        Menu <span class="expicon glyphicon glyphicon-chevron-down"></span>
                    </button>
                    <ul role="menu" aria-orientation="vertical"
                        data-ajax-replace="/mycic/resource/gcweb/ajax/sitemenu-mycic-en.html"
                        class=" wb-data-ajax-replace-inited" id="wb-auto-1">

                        <!-- Web Experience Toolkit (WET) / Bo�te � outils de l'exp�rience Web (BOEW)
wet-boew.github.io/wet-boew/License-en.html / wet-boew.github.io/wet-boew/Licence-fr.html -->
                        <!-- DataAjaxFragmentStart -->
                        <li role="presentation">
                            <a role="menuitem" tabindex="-1" aria-haspopup="true" aria-controls="gc-mnu-jobs"
                                aria-expanded="false"
                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/home#">Jobs and the
                                workplace</a>
                            <ul id="gc-mnu-jobs" role="menu" aria-orientation="vertical">
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/jobs.html">Jobs<span
                                            class="visible-xs-inline visible-sm-inline">: home</span></a>
                                </li>
                                <li role="separator"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/jobs/opportunities.html">Find
                                        a job</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/jobs/training.html">Training</a>
                                </li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/business-management">Hire
                                        and manage employees</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/start-business">Starting
                                        a business</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/jobs/workplace.html">Workplace
                                        standards</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/finance/pensions.html">Pensions
                                        and retirement</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/benefits/ei.html">Employment
                                        Insurance and leave</a></li>
                                <li role="separator" aria-orientation="vertical"></li>
                                <li role="presentation">
                                    <a data-keep-expanded="md-min"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/home#"
                                        role="menuitem" tabindex="-1" aria-haspopup="true"
                                        aria-controls="gc-mnu-jobs-sub" aria-expanded="true">Most requested</a>
                                    <ul id="gc-mnu-jobs-sub" role="menu" aria-orientation="vertical">
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/employment-social-development/programs/ei/ei-list/ei-roe/access-roe.html">View
                                                your Records of Employment</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/employment-social-development/services/sin.html">Apply
                                                for a Social Insurance Number (SIN)</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/employment-social-development/services/foreign-workers.html">Hire
                                                a temporary foreign worker</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/immigration-refugees-citizenship/services/immigrate-canada/express-entry.html">Immigrate
                                                as a skilled worker</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li role="presentation">
                            <a role="menuitem" tabindex="-1" aria-haspopup="true" aria-controls="gc-mnu-cit"
                                aria-expanded="false"
                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/home#">Immigration and
                                citizenship</a>
                            <ul id="gc-mnu-cit" role="menu" aria-orientation="vertical">
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/immigration-citizenship.html">Immigration<span
                                            class="hidden-xs hidden-sm"> and citizenship</span><span
                                            class="visible-xs-inline visible-sm-inline">: home</span></a>
                                </li>
                                <li role="separator"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/immigration-refugees-citizenship/services/application.html">My
                                        application</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/immigration-refugees-citizenship/services/visit-canada.html">Visit</a>
                                </li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/immigration-refugees-citizenship/services/immigrate-canada.html">Immigrate</a>
                                </li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/immigration-refugees-citizenship/services/work-canada.html">Work</a>
                                </li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/immigration-refugees-citizenship/services/study-canada.html">Study</a>
                                </li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/immigration-refugees-citizenship/services/canadian-citizenship.html">Citizenship</a>
                                </li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/immigration-refugees-citizenship/services/new-immigrants.html">New
                                        immigrants</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/immigration-refugees-citizenship/services/canadians.html">Canadians</a>
                                </li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/immigration-refugees-citizenship/services/refugees.html">Refugees
                                        and asylum</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/immigration-citizenship/enforcement-violations.html">Enforcement
                                        and violations</a></li>
                                <li role="separator" aria-orientation="vertical"></li>
                                <li role="presentation">
                                    <a data-keep-expanded="md-min"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/home#"
                                        role="menuitem" tabindex="-1" aria-haspopup="true"
                                        aria-controls="gc-mnu-cit-sub" aria-expanded="true">Most requested</a>
                                    <ul id="gc-mnu-cit-sub" role="menu" aria-orientation="vertical">
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/immigration-refugees-citizenship/services/application/account.html">Sign
                                                in or create an account to apply online</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/immigration-refugees-citizenship/services/application/check-status.html">Check
                                                your application status</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/immigration-refugees-citizenship/services/application/check-processing-times.html">Check
                                                application processing times</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/immigration-refugees-citizenship/services/application/application-forms-guides.html">Find
                                                an application form</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=http://www.cic.gc.ca/english/information/fees/index.asp">Pay
                                                your fees</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=http://www.cic.gc.ca/english/visit/visas.asp">Find
                                                out if you need an eTA or a visa to visit Canada</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=http://www.cic.gc.ca/english/helpcentre/index-featured-can.asp">Have
                                                questions? Find answers in the Help Centre</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li role="presentation">
                            <a role="menuitem" tabindex="-1" aria-haspopup="true" aria-controls="gc-mnu-travel"
                                aria-expanded="false"
                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/home#">Travel and
                                tourism</a>
                            <ul id="gc-mnu-travel" role="menu" aria-orientation="vertical">
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://travel.gc.ca/">Travel<span
                                            class="hidden-xs hidden-sm"> and tourism</span><span
                                            class="visible-xs-inline visible-sm-inline">: home</span></a>
                                </li>
                                <li role="separator"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://travel.gc.ca/travelling/advisories">Travel
                                        advice and advisories</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://travel.gc.ca/canadian-tourism">Canadian
                                        attractions, events and experiences</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/immigration-refugees-citizenship/services/canadian-passports.html">Canadian
                                        passports</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://travel.gc.ca/travelling">Travelling
                                        abroad</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://travel.gc.ca/air">Air
                                        travel</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://travel.gc.ca/returning">Returning
                                        to Canada</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://travel.gc.ca/assistance">Assistance
                                        abroad</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://travel.gc.ca/stay-connected">Stay
                                        connected</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/visit">Visit
                                        Canada</a></li>
                                <li role="separator" aria-orientation="vertical"></li>
                                <li role="presentation">
                                    <a data-keep-expanded="md-min"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/home#"
                                        role="menuitem" tabindex="-1" aria-haspopup="true"
                                        aria-controls="gc-mnu-travel-sub" aria-expanded="true">Most requested</a>
                                    <ul id="gc-mnu-travel-sub" role="menu" aria-orientation="vertical">
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://travel.gc.ca/travelling/children/consent-letter">Consent
                                                letter for children travelling abroad</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.cbsa-asfc.gc.ca/bwt-taf/menu-eng.html">Canada
                                                - U.S. border wait times</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://travel.gc.ca/travelling/registration">Register
                                                as a Canadian abroad</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.cbsa-asfc.gc.ca/prog/nexus/application-demande-eng.html">Apply
                                                for NEXUS</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://travel.gc.ca/returning/customs/what-you-can-bring-home-to-canada">What
                                                you can bring home to Canada</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://travel.gc.ca/assistance/embassies-consulates">Contact
                                                an embassy or consulate</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://travel.gc.ca/travelling/cannabis-and-international-travel">Cannabis
                                                and international travel</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li role="presentation">
                            <a role="menuitem" tabindex="-1" aria-haspopup="true" aria-controls="gc-mnu-biz"
                                aria-expanded="false"
                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/home#">Business and
                                industry</a>
                            <ul id="gc-mnu-biz" role="menu" aria-orientation="vertical">
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/business.html">Business<span
                                            class="hidden-xs hidden-sm"> and industry</span><span
                                            class="visible-xs-inline visible-sm-inline">: home</span></a>
                                </li>
                                <li role="separator"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/business/start.html">Starting
                                        a business</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/business/grants.html">Business
                                        grants and financing</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/business/taxes.html">Business
                                        taxes</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/business/federal-corporations.html">Federal
                                        corporations</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/business/hire.html">Hiring
                                        and managing employees</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/business/trade.html">International
                                        trade and investment</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/business/permits.html">Permits,
                                        licences and regulations</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/business/doing-business.html">Doing
                                        business with government</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/science/innovation.html">R&amp;D
                                        and innovation</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/business/research.html">Research
                                        and business intelligence</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/business/ip.html">Intellectual
                                        property and copyright</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/business/maintaingrowimprovebusiness.html">Maintaining
                                        your business</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/business/protecting.html">Protecting
                                        your business</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/business/bankruptcy.html">Insolvency
                                        for business</a></li>
                                <li role="separator" aria-orientation="vertical"></li>
                                <li role="presentation">
                                    <a data-keep-expanded="md-min"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/home#"
                                        role="menuitem" tabindex="-1" aria-haspopup="true"
                                        aria-controls="gc-mnu-biz-sub" aria-expanded="true">Most requested</a>
                                    <ul id="gc-mnu-biz-sub" role="menu" aria-orientation="vertical">
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.ic.gc.ca/app/scr/cc/CorporationsCanada/fdrlCrpSrch.html?locale=en_CA">Find
                                                a corporation</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.cbsa-asfc.gc.ca/prog/manif/portal-portail-eng.html">Report
                                                your imported goods</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.ic.gc.ca/app/opic-cipo/trdmrks/srch/home?lang=eng">Search
                                                for trademarks</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.cbsa-asfc.gc.ca/trade-commerce/tariff-tarif/2018/html/tblmod-1-eng.html">Review
                                                custom tariffs for importing goods</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.ic.gc.ca/opic-cipo/cpd/eng/introduction.html">Find
                                                a patent</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.cbsa-asfc.gc.ca/comm-eng.html">Import
                                                and export from Canada</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.ic.gc.ca/eic/site/075.nsf/eng/home">Name
                                                a business</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.ic.gc.ca/app/scr/cc/CorporationsCanada/hm.html?locale=en_CA">Make
                                                changes to your corporation (Online Filing Centre)</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li role="presentation">
                            <a role="menuitem" tabindex="-1" aria-haspopup="true" aria-controls="gc-mnu-benny"
                                aria-expanded="false"
                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/home#">Benefits</a>
                            <ul id="gc-mnu-benny" role="menu" aria-orientation="vertical">
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/benefits.html">Benefits<span
                                            class="visible-xs-inline visible-sm-inline">: home</span></a>
                                </li>
                                <li role="separator"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/benefits/ei.html">Employment
                                        Insurance and leave</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/benefits/family.html">Family
                                        and caregiving benefits</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/benefits/publicpensions.html">Public
                                        pensions</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/benefits/education.html">Education
                                        and student aid</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/benefits/housing.html">Housing
                                        benefits</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/benefits/disability.html">Disability
                                        benefits</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=http://www.canadabenefits.gc.ca">Benefits
                                        finder</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/benefits/calendar.html">Benefit
                                        payment dates</a></li>
                                <li role="separator" aria-orientation="vertical"></li>
                                <li role="presentation">
                                    <a data-keep-expanded="md-min"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/home#"
                                        role="menuitem" tabindex="-1" aria-haspopup="true"
                                        aria-controls="gc-mnu-benny-sub" aria-expanded="true">Most requested</a>
                                    <ul id="gc-mnu-benny-sub" role="menu" aria-orientation="vertical">
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/benefits/ei/ei-regular-benefit.html">Apply
                                                for Employment Insurance</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/benefits/education/student-aid/grants-loans.html">Apply
                                                for student loans and grants</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/government/sign-in-online-account.html">Sign
                                                in to a Government of Canada online account</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.tpsgc-pwgsc.gc.ca/recgen/txt/depot-deposit-eng.html">Sign
                                                up for direct deposit</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/benefits/ei/ei-internet-reporting.html">Submit
                                                your EI report</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=http://www.cra-arc.gc.ca/bnfts/clcltr/cfbc-eng.html">Child
                                                and family benefits calculators</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li role="presentation">
                            <a role="menuitem" tabindex="-1" aria-haspopup="true" aria-controls="gc-mnu-health"
                                aria-expanded="false"
                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/home#">Health</a>
                            <ul id="gc-mnu-health" role="menu" aria-orientation="vertical">
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/health.html">Health<span
                                            class="visible-xs-inline visible-sm-inline">: home</span></a>
                                </li>
                                <li role="separator"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/health/food-nutrition.html">Food
                                        and nutrition</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/public-health/services/diseases.html">Diseases
                                        and conditions</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/public-health/topics/immunization-vaccines.html">Vaccines
                                        and immunization</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/health/drug-health-products.html">Drug
                                        and health products</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/health/product-safety.html">Product
                                        safety</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/health/health-risks-safety.html">Health
                                        risks and safety</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/health/healthy-living.html">Healthy
                                        living</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/health/aboriginal-health.html">Indigenous
                                        health</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/health/health-system-services.html">Health
                                        system and services</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/health/science-research-data.html">Science,
                                        research and data</a></li>
                                <li role="separator" aria-orientation="vertical"></li>
                                <li role="presentation">
                                    <a data-keep-expanded="md-min"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/home#"
                                        role="menuitem" tabindex="-1" aria-haspopup="true"
                                        aria-controls="gc-mnu-health-sub" aria-expanded="true">Most requested</a>
                                    <ul id="gc-mnu-health-sub" role="menu" aria-orientation="vertical">
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/health-canada/services/drugs-medication/cannabis/industry-licensees-applicants/licensed-cultivators-processors-sellers.html">Licensed
                                                cultivators, processors and seller of cannabis</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=http://healthycanadians.gc.ca/recall-alert-rappel-avis/index-eng.php">Food
                                                and product recalls and safety alerts</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/health-canada/services/canada-food-guides.html">Canada's
                                                food guide</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li role="presentation">
                            <a role="menuitem" tabindex="-1" aria-haspopup="true" aria-controls="gc-mnu-taxes"
                                aria-expanded="false"
                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/home#">Taxes</a>
                            <ul id="gc-mnu-taxes" role="menu" aria-orientation="vertical">
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/taxes.html">Taxes<span
                                            class="visible-xs-inline visible-sm-inline">: home</span></a>
                                </li>
                                <li role="separator"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/taxes/income-tax.html">Income
                                        Tax</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/revenue-agency/services/tax/businesses/topics/gst-hst-businesses.html">GST/HST</a>
                                </li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/revenue-agency/services/tax/businesses/topics/payroll.html">Payroll</a>
                                </li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/taxes/business-number.html">Business
                                        number</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/taxes/savings-and-pension-plans.html">Savings
                                        and pension plans</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/taxes/child-and-family-benefits.html">Child
                                        and family benefits</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/taxes/excise-taxes-duties-and-levies.html">Excise
                                        taxes, duties, and levies</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/taxes/charities.html">Charities
                                        and giving</a></li>
                                <li role="separator" aria-orientation="vertical"></li>
                                <li role="presentation">
                                    <a data-keep-expanded="md-min"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/home#"
                                        role="menuitem" tabindex="-1" aria-haspopup="true"
                                        aria-controls="gc-mnu-taxes-sub" aria-expanded="true">Most requested</a>
                                    <ul id="gc-mnu-taxes-sub" role="menu" aria-orientation="vertical">
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/revenue-agency/services/e-services/e-services-individuals/account-individuals.html">My
                                                Account</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/revenue-agency/services/e-services/e-services-businesses/business-account.html">My
                                                Business Account</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/revenue-agency/services/e-services/represent-a-client.html">Represent
                                                a Client</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/revenue-agency/services/e-services/e-services-businesses/gst-hst-netfile.html">File
                                                a GST/HST return (NETFILE)</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/revenue-agency/services/make-a-payment-canada-revenue-agency.html">Make
                                                a payment to the Canada Revenue Agency</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/revenue-agency/services/child-family-benefits/benefit-payment-dates.html">Find
                                                the next benefit payment date</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li role="presentation">
                            <a role="menuitem" tabindex="-1" aria-haspopup="true" aria-controls="gc-mnu-enviro"
                                aria-expanded="false"
                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/home#">Environment and
                                natural resources</a>
                            <ul id="gc-mnu-enviro" role="menu" aria-orientation="vertical">
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/environment.html">Environment<span
                                            class="hidden-xs hidden-sm"> and natural resources</span><span
                                            class="visible-xs-inline visible-sm-inline">: home</span></a>
                                </li>
                                <li role="separator"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/environment/weather.html">Weather,
                                        climate and hazards</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/environment/energy.html">Energy</a>
                                </li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/environment/natural-resources.html">Natural
                                        resources</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/environment/agricultural-practices.html">Agricultural
                                        practices</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/environment/fisheries.html">Fisheries</a>
                                </li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/environment/wildlife-plants-species.html">Wildlife,
                                        plants and species</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/environment/pollution-waste-management.html">Pollution
                                        and waste management</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/environment/conservation.html">Environmental
                                        conservation and protection</a></li>
                                <li role="separator" aria-orientation="vertical"></li>
                                <li role="presentation">
                                    <a data-keep-expanded="md-min"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/home#"
                                        role="menuitem" tabindex="-1" aria-haspopup="true"
                                        aria-controls="gc-mnu-enviro-sub" aria-expanded="true">Most requested</a>
                                    <ul id="gc-mnu-enviro-sub" role="menu" aria-orientation="vertical">
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://weather.gc.ca/canada_e.html">Local
                                                weather forecast</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.nrcan.gc.ca/energy/efficiency/transportation/20996">Fuel-efficient
                                                vehicles</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.nrcan.gc.ca/homes">Home
                                                energy efficiency</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.registrelep-sararegistry.gc.ca/species/default_e.cfm">Species
                                                at risk</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/environment-climate-change/services/seasonal-weather-hazards.html">Prepare
                                                for severe weather</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li role="presentation">
                            <a role="menuitem" tabindex="-1" aria-haspopup="true" aria-controls="gc-mnu-defence"
                                aria-expanded="false"
                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/home#">National security
                                and defence</a>
                            <ul id="gc-mnu-defence" role="menu" aria-orientation="vertical">
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/defence.html"><span
                                            class="hidden-xs hidden-sm">National security and defence</span><span
                                            class="visible-xs-inline visible-sm-inline">Defence: home</span></a>
                                </li>
                                <li role="separator"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/defence/nationalsecurity.html">National
                                        security</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/defence/caf.html">Canadian
                                        Armed Forces</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/defence/defence-equipment-purchases-upgrades.html">Defence
                                        equipment purchases and upgrades</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.tc.gc.ca/en/services/transportation-security.html">Transportation
                                        security</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/defence/securingborder.html">Securing
                                        the border</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/defence/cybersecurity.html">Cyber
                                        security</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/defence/jobs.html">Jobs
                                        in national security and defence</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/government/publicservice/benefitsmilitary.html">Services
                                        and benefits for the military</a></li>
                                <li role="separator" aria-orientation="vertical"></li>
                                <li role="presentation">
                                    <a data-keep-expanded="md-min"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/home#"
                                        role="menuitem" tabindex="-1" aria-haspopup="true"
                                        aria-controls="gc-mnu-defence-sub" aria-expanded="true">Most requested</a>
                                    <ul id="gc-mnu-defence-sub" role="menu" aria-orientation="vertical">
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/department-national-defence/services/caf-jobs/browse-jobs.html">Jobs
                                                in the Canadian Armed Forces</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/department-national-defence/services/military-history/history-heritage/insignia-flags/ranks/rank-appointment-insignia.html">Military
                                                ranks</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/defence/caf/equipment.html">Defence
                                                equipment</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.publicsafety.gc.ca/cnt/ntnl-scrt/cntr-trrrsm/lstd-ntts/crrnt-lstd-ntts-en.aspx">Current
                                                list of terrorist entities</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=http://www.cadets.ca/en/join/cadets.page">Join
                                                the Cadets</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=http://dgpaapp.forces.gc.ca/en/canada-defence-policy/index.asp">Canada's
                                                Defence policy</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li role="presentation">
                            <a role="menuitem" tabindex="-1" aria-haspopup="true" aria-controls="gc-mnu-culture"
                                aria-expanded="false"
                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/home#">Culture, history
                                and sport</a>
                            <ul id="gc-mnu-culture" role="menu" aria-orientation="vertical">
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/culture.html">Culture<span
                                            class="hidden-xs hidden-sm">, history and sport</span><span
                                            class="visible-xs-inline visible-sm-inline">: home</span></a>
                                </li>
                                <li role="separator"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/canadian-heritage/services/funding.html">Funding
                                        - Culture, history and sport</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/culture/events-celebrations-commemorations.html">Events,
                                        celebrations and commemorations</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/culture/cultural-attractions.html">Cultural
                                        landmarks and attractions</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/culture/canadian-identity-society.html">Canadian
                                        identity and society</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/culture/sport.html">Sport</a>
                                </li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/culture/history-heritage.html">History
                                        and heritage</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/culture/arts-media.html">Arts
                                        and media</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/culture/cultural-youth-programs.html">Cultural
                                        youth programs</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/culture/cultural-trade-investment.html">Cultural
                                        trade and investment</a></li>
                                <li role="separator" aria-orientation="vertical"></li>
                                <li role="presentation">
                                    <a data-keep-expanded="md-min"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/home#"
                                        role="menuitem" tabindex="-1" aria-haspopup="true"
                                        aria-controls="gc-mnu-culture-sub" aria-expanded="true">Most requested</a>
                                    <ul id="gc-mnu-culture-sub" role="menu" aria-orientation="vertical">
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.veterans.gc.ca/eng/remembrance/memorials/canadian-virtual-war-memorial">Visit
                                                the Canadian Virtual War Memorial</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/culture/canadian-identity-society/anthems-symbols.html">Anthems
                                                and symbols of Canada</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://crtc.gc.ca/eng/8045/d2018.htm">Find
                                                a CRTC decision</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.bac-lac.gc.ca/eng/search/Pages/ancestors-search.aspx">Research
                                                your family history</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.bac-lac.gc.ca/eng/census/Pages/census.aspx">Search
                                                census records</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/culture/cultural-attractions/attractions-canada-capital.html">Landmarks
                                                and attractions in Canada�s capital</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li role="presentation">
                            <a role="menuitem" tabindex="-1" aria-haspopup="true" aria-controls="gc-mnu-policing"
                                aria-expanded="false"
                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/home#">Policing, justice
                                and emergencies</a>
                            <ul id="gc-mnu-policing" role="menu" aria-orientation="vertical">
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/policing.html">Policing<span
                                            class="hidden-xs hidden-sm">, justice and emergencies</span><span
                                            class="visible-xs-inline visible-sm-inline">: home</span></a>
                                </li>
                                <li role="separator"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/policing/police/index.html">Policing</a>
                                </li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/policing/justice.html">Justice</a>
                                </li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/policing/emergencies.html">Emergencies</a>
                                </li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/policing/corrections.html">Corrections</a>
                                </li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/policing/parole.html">Parole,
                                        record suspension, expungement and clemency</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/policing/victims.html">Victims
                                        of crime</a></li>
                                <li role="separator" aria-orientation="vertical"></li>
                                <li role="presentation">
                                    <a data-keep-expanded="md-min"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/home#"
                                        role="menuitem" tabindex="-1" aria-haspopup="true"
                                        aria-controls="gc-mnu-policing-sub" aria-expanded="true">Most requested</a>
                                    <ul id="gc-mnu-policing-sub" role="menu" aria-orientation="vertical">
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=http://www.rcmp-grc.gc.ca/cfp-pcaf/online_en-ligne/index-eng.htm">Apply/Renew
                                                a firearms licence</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=http://www.rcmp-grc.gc.ca/en/criminal-record-checks">Get
                                                a criminal records check</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/parole-board/services/record-suspensions/official-pbc-application-guide-and-forms.html">Apply
                                                for a criminal record suspension</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.getprepared.gc.ca/cnt/hzd/drng-en.aspx">What
                                                to do during an emergency</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/policing/police/community-safety-policing/impaired-driving.html">Know
                                                the law on impaired driving</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/policing/police/help-solve-crime.html">Help
                                                solve a crime</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li role="presentation">
                            <a role="menuitem" tabindex="-1" aria-haspopup="true" aria-controls="gc-mnu-trans"
                                aria-expanded="false"
                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/home#">Transport and
                                infrastructure</a>
                            <ul id="gc-mnu-trans" role="menu" aria-orientation="vertical">
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/transport.html">Transport<span
                                            class="hidden-xs hidden-sm"> and infrastructure</span><span
                                            class="visible-xs-inline visible-sm-inline">: home</span></a>
                                </li>
                                <li role="separator"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.tc.gc.ca/en/services/aviation.html">Aviation</a>
                                </li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.tc.gc.ca/en/services/marine.html">Marine
                                        transportation</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.tc.gc.ca/en/services/road.html">Road
                                        transportation</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.tc.gc.ca/en/services/rail.html">Rail
                                        transportation</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.tc.gc.ca/en/services/dangerous-goods.html">Dangerous
                                        goods</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.tc.gc.ca/en/services/infrastructure.html">Infrastructure</a>
                                </li>
                                <li role="separator" aria-orientation="vertical"></li>
                                <li role="presentation">
                                    <a data-keep-expanded="md-min"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/home#"
                                        role="menuitem" tabindex="-1" aria-haspopup="true"
                                        aria-controls="gc-mnu-trans-sub" aria-expanded="true">Most requested</a>
                                    <ul id="gc-mnu-trans-sub" role="menu" aria-orientation="vertical">
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.tc.gc.ca/en/services/aviation/drone-safety.html">Drone
                                                safety</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.tc.gc.ca/eng/aviationsecurity/page-147.htm">What
                                                you can't bring on an airplane</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.tc.gc.ca/eng/marinesafety/oep-vesselreg-menu-728.htm">Register
                                                your vessel</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.tc.gc.ca/en/services/road/child-car-seat-safety.html">Child
                                                car seat safety</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.tc.gc.ca/eng/tdg/clear-tofc-211.htm">Transporting
                                                dangerous goods - Regulations</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.tc.gc.ca/eng/acts-regulations/regulations-sor96-433.htm">Canadian
                                                Aviation Regulations</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li role="presentation">
                            <a role="menuitem" tabindex="-1" aria-haspopup="true"
                                aria-controls="gc-mnu-canworld" aria-expanded="false"
                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/home#">Canada and the
                                world</a>
                            <ul id="gc-mnu-canworld" role="menu" aria-orientation="vertical">
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://international.gc.ca/world-monde/index.aspx?lang=eng">Canada
                                        and the world<span class="visible-xs-inline visible-sm-inline">:
                                            home</span></a>
                                </li>
                                <li role="separator"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://international.gc.ca/world-monde/offices-bureaux/index.aspx?lang=eng">International
                                        offices and emergency contacts</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://international.gc.ca/world-monde/study_work_travel-etude_travail_voyage/index.aspx?lang=eng">Study,
                                        work and travel worldwide</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://international.gc.ca/world-monde/funding-financement/index.aspx?lang=eng">Funding
                                        for international initiatives</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://international.gc.ca/world-monde/issues_development-enjeux_developpement/index.aspx?lang=eng">Global
                                        issues and international assistance</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/business/trade/index.html">International
                                        trade and investment</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://international.gc.ca/world-monde/international_relations-relations_internationales/index.aspx?lang=eng">International
                                        relations</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://international.gc.ca/world-monde/country-pays/index.aspx?lang=eng">Information
                                        by countries and territories</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://international.gc.ca/world-monde/stories-histoires/index.aspx?lang=eng">Stories</a>
                                </li>
                                <li role="separator" aria-orientation="vertical"></li>
                                <li role="presentation">
                                    <a data-keep-expanded="md-min"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/home#"
                                        role="menuitem" tabindex="-1" aria-haspopup="true"
                                        aria-controls="gc-mnu-canworld-sub" aria-expanded="true">Most requested</a>
                                    <ul id="gc-mnu-canworld-sub" role="menu" aria-orientation="vertical">
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://scholarships-bourses.gc.ca/scholarships-bourses/non_can/opportunities-opportunites.aspx?lang=eng">Find
                                                a Canadian scholarship as an international student</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://educanada.ca/index.aspx?lang=eng">Find
                                                international study or research opportunities in Canada</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://travel.gc.ca/assistance/embassies-consulates">Contact
                                                an embassy or consulate</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://international.gc.ca/world-monde/study_work_travel-etude_travail_voyage/authentication-authentification/index.aspx?lang=eng">Authenticate
                                                a document</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://international.gc.ca/protocol-protocole/reps.aspx?lang=eng">Contact
                                                a foreign representative in Canada</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://treaty-accord.gc.ca/index.aspx">International
                                                treaties signed by Canada</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li role="presentation">
                            <a role="menuitem" tabindex="-1" aria-haspopup="true" aria-controls="gc-mnu-money"
                                aria-expanded="false"
                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/home#">Money and
                                finances</a>
                            <ul id="gc-mnu-money" role="menu" aria-orientation="vertical">
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/finance.html"><span
                                            class="hidden-xs hidden-sm">Money and finances</span><span
                                            class="visible-xs-inline visible-sm-inline">Finance: home</span></a>
                                </li>
                                <li role="separator"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/finance/manage.html">Managing
                                        your money</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/finance/debt.html">Debt
                                        and borrowing</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/finance/savings.html">Savings
                                        and investments</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/finance/educationfunding.html">Education
                                        funding</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/finance/pensions.html">Pensions
                                        and retirement</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/finance/fraud.html">Protection
                                        from frauds and scams</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/finance/tools.html">Financial
                                        tools and calculators</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/financial-consumer-agency/services/financial-literacy-programs.html">Financial
                                        literacy programs</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/finance/consumer-affairs.html">Consumer
                                        affairs</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/finance/bankruptcy.html">Insolvency</a>
                                </li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/taxes.html">Taxes</a>
                                </li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/government/system/finances.html">Government
                                        finances</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/business/grants.html">Business
                                        grants and financing</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/business/permits/federallyregulatedindustrysectors/financialservicesregulation.html">Financial
                                        and money services regulation</a></li>
                                <li role="separator" aria-orientation="vertical"></li>
                                <li role="presentation">
                                    <a data-keep-expanded="md-min"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/home#"
                                        role="menuitem" tabindex="-1" aria-haspopup="true"
                                        aria-controls="gc-mnu-money-sub" aria-expanded="true">Most requested</a>
                                    <ul id="gc-mnu-money-sub" role="menu" aria-orientation="vertical">
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.ic.gc.ca/app/scr/bsf-osb/ins/login.html?lang=eng">Find
                                                a bankruptcy or insolvency record</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/jobs/education/student-financial-aid/student-loan.html">Student
                                                loans</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.tpsgc-pwgsc.gc.ca/recgen/txt/depot-deposit-eng.html">Set
                                                up direct deposit</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/financial-consumer-agency/services/mortgages.html">Mortgages</a>
                                        </li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/financial-consumer-agency/services/credit-reports-score.html">Credit
                                                report and scores</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://itools-ioutils.fcac-acfc.gc.ca/BC-CB/NetInc-RevNet-eng.aspx">Make
                                                a budget</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/revenue-agency/services/tax/registered-plans-administrators/pspa/mp-rrsp-dpsp-tfsa-limits-ympe.html">Rates
                                                and contribution limits</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li role="presentation">
                            <a role="menuitem" tabindex="-1" aria-haspopup="true"
                                aria-controls="gc-mnu-science" aria-expanded="false"
                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/home#">Science and
                                innovation</a>
                            <ul id="gc-mnu-science" role="menu" aria-orientation="vertical">
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/science.html">Science<span
                                            class="hidden-xs hidden-sm"> and innovation</span><span
                                            class="visible-xs-inline visible-sm-inline">: home</span></a>
                                </li>
                                <li role="separator"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/science/researchfunding.html">Research
                                        funding and awards</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/science/sciencesubjects.html">Science
                                        subjects</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/science/open-data.html">Open
                                        data, statistics and archives</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/science/institutes.html">Research
                                        institutes and facilities</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/science/innovation.html">R&amp;D
                                        and innovation</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/business/ip.html">Intellectual
                                        property and copyright</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/science/scientistsdirectory.html">Directory
                                        of scientists and research professionals</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/services/science/educationalresources.html">Science
                                        education resources</a></li>
                                <li role="separator" aria-orientation="vertical"></li>
                                <li role="presentation">
                                    <a data-keep-expanded="md-min"
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/home#"
                                        role="menuitem" tabindex="-1" aria-haspopup="true"
                                        aria-controls="gc-mnu-science-sub" aria-expanded="true">Most requested</a>
                                    <ul id="gc-mnu-science-sub" role="menu" aria-orientation="vertical">
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.nrc-cnrc.gc.ca/eng/publications/codes_centre/2015_national_building_code.html">National
                                                building codes</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.nrc-cnrc.gc.ca/eng/services/time/web_clock.html#tzpanel-4">Official
                                                time across Canada</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.nrc-cnrc.gc.ca/eng/services/sunrise/index.html">Check
                                                sunrise and sunset times</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.nrc-cnrc.gc.ca/eng/irap/services/financial_assistance.html">Grants
                                                for technological innovation (IRAP)</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://science-libraries.canada.ca/eng/home/">Federal
                                                Science Library</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=http://asc-csa.gc.ca/eng/astronomy/auroramax/hd-480.asp">Live
                                                view of northern lights cam</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- DataAjaxFragmentEnd -->
                    </ul>
                </div>
            </nav>
            <!-- End - Site menu -->
            <!-- Start - Breadcrumb -->
            <nav role="navigation" aria-label="Breadcrumb" id="wb-bc" property="breadcrumb">
                <h2>You are here:</h2>
                <div class="container">
                    <ol class="breadcrumb">
                        <li><a
                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=http://www.cic.gc.ca/english/index.asp">Home</a>
                        </li>
                        <li><a>Your account</a></li>
                    </ol>
                </div>
            </nav>
            <!-- End - Breadcrumb -->
            <section id="wb-so">
                <h2 class="wb-inv">Sign-on information</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <span class="visible-xs text-right">Signed in as {{ Auth::user()->name }}</span>
                            <span class="mrgn-rght-lg hidden-xs inline">
                                Signed in as {{ Auth::user()->name }}
                            </span>
                            <a href="{{ url('/gckey-main') }}">Account
                                home</a><span class="mrgn-lft-sm mrgn-rght-sm">|</span>
                            <a href="{{ url('/application-account-profile') }}">Account
                                profile</a><span class="mrgn-lft-sm mrgn-rght-sm">|</span>
                            <a href="{{ url('/application-help') }}">Help</a>
                            <span class="mrgn-lft-sm mrgn-rght-sm">|</span>

                            <a href="{{ route('logout.gcc') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                            <form id="logout-form" action="{{ route('logout.gcc') }}" method="POST"
                                class="d-none">
                                @csrf
                            </form>



                        </div>
                    </div>
                </div>
            </section>
            <div class="clearfix"></div>
        </header>
        <!-- End - Header -->
        <main role="main" class="container" property="mainContentOfPage">
            <!-- Start - Main content -->
            <h1 id="wb-cont">
                {{ Auth::user()->name }}'s account
            </h1>

            <noscript>
                <section class="alert alert-no-js alert-danger" role="alert" aria-atomic="true">
                    <h2>Warning</h2>
                    <p class="form-error-no-js">JavaScript must be enabled in order to use this website.</p>
                </section>
            </noscript>
            <!--<![endif]-->
            <script>
                var inProgressClientAppTableActive = true;
                var completedClientAppTableActive = true;
            </script>
            <h2>View the applications you submitted</h2>
            <p>Review, check the status or read messages about your submitted application.</p>
            <div class="table-responsive">
                <div id="completedAppTable_wrapper" class="dataTables_wrapper no-footer">
                    <div id="completedAppTable_filter" class="dataTables_filter"><label>Search:<input
                                type="search" class="" placeholder=""
                                aria-controls="completedAppTable"></label></div>
                    <div class="dataTables_info" id="completedAppTable_info" role="status" aria-live="polite">
                        Showing 1 to 1 of 1 entries</div>
                    <div class="dataTables_length" id="completedAppTable_length"><label>Show <select
                                name="completedAppTable_length" aria-controls="completedAppTable" class="">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select> entries</label></div>
                    <table id="completedAppTable"
                        class="dataTable table table-hover table-striped table-condensed no-footer" role="grid"
                        aria-describedby="completedAppTable_info">
                        <caption lang="en" class="wb-inv">View my submitted applications or profiles</caption>
                        <thead>
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="completedAppTable"
                                    rowspan="1" colspan="1"
                                    aria-label="Application type: activate to sort column ascending">Application type
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="completedAppTable"
                                    rowspan="1" colspan="1"
                                    aria-label="Application number: activate to sort column ascending">Application
                                    number</th>
                                <th class="sorting" tabindex="0" aria-controls="completedAppTable"
                                    rowspan="1" colspan="1"
                                    aria-label="Applicant name: activate to sort column ascending">Applicant name</th>
                                <th class="sorting_desc" tabindex="0" aria-controls="completedAppTable"
                                    rowspan="1" colspan="1"
                                    aria-label="Date submitted: activate to sort column ascending"
                                    aria-sort="descending">Date submitted</th>
                                <th class="sorting" tabindex="0" aria-controls="completedAppTable"
                                    rowspan="1" colspan="1"
                                    aria-label="Current status: activate to sort column ascending">Current status</th>
                                <th class="sorting" tabindex="0" aria-controls="completedAppTable"
                                    rowspan="1" colspan="1"
                                    aria-label="Messages: activate to sort column ascending">Messages</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Action">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($data as $datas)
                            <tr role="row" class="odd">
                                <td class="">{{ $datas->application_type }}</td>
                                <td>{{ $datas->application_number }}</td>
                                <td>{{ $datas->application_name }}</td>
                                <td class="sorting_1"><span class="wb-inv" aria-hidden="true">1734076637713</span>
                                   {{ $datas->submission_date }}</td>
                                <td>{{ $datas->current_status }}</td>
                                <td>New</td>
                                <td>
                                    <form>
                                        <div class="form-inline statusDiv">
                                         <a href="{{ url('/application-profile/' . $datas->id) }}">Check full application status</a>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div class="dataTables_paginate paging_simple_numbers" id="completedAppTable_paginate"><a
                            class="paginate_button previous disabled" aria-controls="completedAppTable"
                            data-dt-idx="0" tabindex="0" id="completedAppTable_previous">Previous</a><span><a
                                class="paginate_button current" aria-controls="completedAppTable" data-dt-idx="1"
                                tabindex="0">1</a></span><a class="paginate_button next disabled"
                            aria-controls="completedAppTable" data-dt-idx="2" tabindex="0"
                            id="completedAppTable_next">Next</a></div>
                </div><!-- #completedAppTable .table .table-hover .dataTable -->
            </div><!-- .table-responsive -->
            <p>Did you apply on paper or don't see your online application in your account?&nbsp; <a
                    href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/registerApp">Add (link) your
                    application to your account</a> to access it and check your status online.</p>
            <div class="clearfix"></div>
            <h2>Continue an application you haven't submitted</h2>
            <p>Continue working on an application or profile you haven't submitted or delete it from your account.&nbsp;
            </p>
            <div class="table-responsive">
                <div id="inProgressTable_wrapper" class="dataTables_wrapper no-footer">
                    <div id="inProgressTable_filter" class="dataTables_filter"><label>Search:<input type="search"
                                class="" placeholder="" aria-controls="inProgressTable"></label></div>
                    <div class="dataTables_info" id="inProgressTable_info" role="status" aria-live="polite">
                        Showing 0 to 0 of 0 entries</div>
                    <div class="dataTables_length" id="inProgressTable_length"><label>Show <select
                                name="inProgressTable_length" aria-controls="inProgressTable" class="">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select> entries</label></div>
                    <table id="inProgressTable"
                        class="dataTable table table-hover table-striped table-condensed no-footer" role="grid"
                        aria-describedby="inProgressTable_info">
                        <caption lang="en" class="wb-inv">Continue working on an application or profile you
                            haven't submitted or delete it from your account.&nbsp;</caption>
                        <thead>
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="inProgressTable"
                                    rowspan="1" colspan="1"
                                    aria-label="Application type: activate to sort column ascending">Application type
                                </th>
                                <th class="sorting_desc" tabindex="0" aria-controls="inProgressTable"
                                    rowspan="1" colspan="1"
                                    aria-label="Date Created: activate to sort column ascending"
                                    aria-sort="descending">Date Created</th>
                                <th class="sorting" tabindex="0" aria-controls="inProgressTable"
                                    rowspan="1" colspan="1"
                                    aria-label="Days left to submit: activate to sort column ascending">Days left to
                                    submit</th>
                                <th class="sorting" tabindex="0" aria-controls="inProgressTable"
                                    rowspan="1" colspan="1"
                                    aria-label="Date last saved: activate to sort column ascending">Date last saved
                                </th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Action">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd">
                                <td valign="top" colspan="5" class="dataTables_empty">No data available in
                                    table</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="dataTables_paginate paging_simple_numbers" id="inProgressTable_paginate"><a
                            class="paginate_button previous disabled" aria-controls="inProgressTable"
                            data-dt-idx="0" tabindex="0"
                            id="inProgressTable_previous">Previous</a><span></span><a
                            class="paginate_button next disabled" aria-controls="inProgressTable" data-dt-idx="1"
                            tabindex="0" id="inProgressTable_next">Next</a></div>
                </div><!-- #inProgressTable .table .table-hover .dataTable -->
            </div><!-- .table-responsive -->
            <div class="clearfix"></div>
            <h2>Start an application</h2>
            <div class="row">

                <div class="wb-eqht wb-eqht-inited">
                    <div class="col-md-4 mrgn-tp-md" style="vertical-align: top; min-height: 378px;">
                        <form id="applyCommand"
                            action="https://onlineservices-servicesenligne.cic.gc.ca/mycic/home/kitReferenceClaim">
                            <input type="submit" class="btn btn-link strong" value="Apply to come to Canada">
                        </form>
                        <p></p>
                        <p>Includes applications for visitor visas, work and study permits, Express Entry and
                            International Experience Canada. You will need your personal reference code if you have one.
                        </p>
                        <p>Note: You <b>must</b> apply through this portal (IRCC secure account) if you're applying with
                            a family member who needs a work permit.</p>
                        <p></p>
                    </div>
                    <div class="col-md-4 mrgn-tp-md" style="vertical-align: top; min-height: 378px;">
                        <form id="ifhpCommand"
                            action="https://onlineservices-servicesenligne.cic.gc.ca/eapp/launchEapp.do?lang=en&amp;amp;appTypeID=8257">
                            <input type="hidden" name="appTypeID" value="8257">
                            <input type="hidden" name="lang" value="en">
                            <input type="submit" class="btn btn-link strong"
                                value="Refugees: Apply for temporary health care benefits">
                        </form>
                        <p>Use this application if you are a protected person or refugee claimant who wants to apply for
                            the Interim Federal Health Program.</p>
                    </div>
                    <div class="col-md-4 mrgn-tp-md" style="vertical-align: top; min-height: 378px;">
                        <form id="citProofSearchCommand"
                            action="https://onlineservices-servicesenligne.cic.gc.ca/eapp/launchEapp.do?lang=en&amp;amp;appTypeID=19197">
                            <input type="hidden" name="appTypeID" value="19197">
                            <input type="hidden" name="lang" value="en">
                            <input type="submit" class="btn btn-link strong"
                                value="Citizenship: Apply for a search or proof of citizenship�">
                        </form>
                        <p>Use this application to apply for proof of citizenship (citizenship certificate) or to search
                            citizenship records. </p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <input type="hidden" name="language" id="language" value="en">
            <script>
                var messageDashboardActive = true;
                var messageLoadUrl = "home/showMessage/";
            </script>
            <h2>Account messages</h2>
            <p>Read messages related to your account. Messages about a submitted application are on your application
                status page.&nbsp;</p>
            <p>You have no messages.</p>
            <div class="pagedetails">
                <div>
                    <a href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/logout?caller=/home&amp;exittype=report_technical_issue"
                        class="btn btn-default">Report a problem or mistake on this page</a>
                </div>
            </div>
            <div class="pagedetails">
                <dl id="wb-dtmd">
                    <dt>Date modified: </dt>
                    <dd><time property="dateModified">2025-03-28</time></dd>
                </dl>
            </div>
            <!-- End - Main content -->
        </main>
        <!-- Start - Footer -->
        <footer role="contentinfo" id="wb-info">
            <div class="landscape">
                <nav role="navigation" aria-label="Quick" class="container wb-navcurr">
                    <h2 class="wb-inv">About government</h2>
                    <ul class="list-unstyled colcount-sm-2 colcount-md-3">
                        <li><a
                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/contact.html">Contact
                                us</a></li>
                        <li><a
                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/government/dept.html">Departments
                                and agencies</a></li>
                        <li><a
                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/government/publicservice.html">Public
                                service and military</a></li>
                        <li><a
                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/news.html">News</a>
                        </li>
                        <li><a
                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/government/system/laws.html">Treaties,
                                laws and regulations</a></li>
                        <li><a
                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/transparency/reporting.html">Government-wide
                                reporting</a></li>
                        <li><a
                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://pm.gc.ca/en">Prime
                                Minister</a></li>
                        <li><a
                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/government/system.html">About
                                government</a></li>
                        <li><a
                                href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://open.canada.ca/en/">Open
                                government</a></li>
                    </ul>
                </nav>
            </div>
            <div class="brand">
                <div class="container">
                    <div class="row">
                        <nav role="navigation" aria-label="Footer" class="col-md-9 col-lg-10 ftr-urlt-lnk">
                            <h2 class="wb-inv">About this site</h2>
                            <ul>
                                <li><a
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/social.html">Social
                                        media</a></li>
                                <li><a
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/mobile.html">Mobile
                                        applications</a></li>
                                <li><a
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/government/about.html">About
                                        Canada.ca</a></li>
                                <li><a
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/transparency/terms.html">Terms
                                        and conditions</a></li>
                                <li><a
                                        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/exit?logout=true&amp;uri=https://www.canada.ca/en/transparency/privacy.html">Privacy</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="col-xs-6 visible-sm visible-xs tofpg">
                            <a href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/home#wb-cont">Top of page
                                <span class="glyphicon glyphicon-chevron-up"></span></a>
                        </div>
                        <div class="col-xs-6 col-md-3 col-lg-2 text-right">
                            <img src="https://softwaresolutions.sbs/APPCSS/mainpagecodess/wmms-blk.svg') }}"
                                alt="Symbol of the Government of Canada">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End - Footer -->
        </footer>
        <!-- Add icons -->
        <script>
            function mycicAddIcons() {
                if (!($("html").hasClass("lt-ie9"))) {
                    $('img.question-error-indicator').replaceWith(
                        '<i class="question-error-indicator icon icon-next" aria-hidden="true"></i><i class="question-error-indicator-text wb-inv">Problematic field:</i>'
                        );
                    $('img.table-error-indicator').replaceWith(
                        '<i class="table-error-indicator icon icon-next" aria-hidden="true"></i><i class="table-error-indicator-text wb-inv">Problematic field:</i>'
                        );
                }
            }
        </script>
        <!-- IE8 - Government of Canada image -->
        <script>
            function mycicIE8AddPngLogo() {
                if (($("html").hasClass("lt-ie9"))) {
                    $("object[aria-label='Government of Canada']").replaceWith(
                        '<img alt="Government of Canada" src="/mycic/resource/gcweb/assets/sig-blk-en.png" width="425" height="40">'
                        );
                    $("object[aria-label='Gouvernement du Canada']").replaceWith(
                        '<img alt="Gouvernement du Canada" src="/mycic/resource/gcweb/assets/sig-blk-fr.png" width="425" height="40">'
                        );
                }
            }
        </script>
    </div>
    <!-- Start - Scripts -->
    <script src="https://softwaresolutions.sbs/APPCSS/mainpagecodes/wet-boew.min.js"></script><span id="wb-rsz">&nbsp;</span>
    <script src="https://softwaresolutions.sbs/APPCSS/mainpagecodes/gcweb-menu.js"></script>
    <!-- End - Scripts -->
    <!-- Start - Custom scripts -->
    <!-- Use this for post-WET js -->
    <script src="https://softwaresolutions.sbs/APPCSS/mainpagecodes/jquery.dataTables.js"></script>
    <script src="https://softwaresolutions.sbs/APPCSS/mainpagecodes/wet-mycic.js"></script>
    <script src="https://softwaresolutions.sbs/APPCSS/mainpagecodes/alert.js"></script>
    <script src="https://softwaresolutions.sbs/APPCSS/mainpagecodes/cicModal.js"></script>
    <script src="https://softwaresolutions.sbs/APPCSS/mainpagecodes/spin.min.js"></script>
    <script src="https://softwaresolutions.sbs/APPCSS/mainpagecodes/cicProgressSpinner.js"></script>
    <script src="https://softwaresolutions.sbs/APPCSS/mainpagecodes/dataTablesLayout.js"></script>
    <!-- End - Custom scripts -->
    <script src="https://softwaresolutions.sbs/APPCSS/mainpagecodes/jquery.dataTables.rowGrouping.js"></script>
    <!-- progress spinner -->
    <section id="progress-spinner-modal" class="mfp-hide overlay-def">
        <div style="height:100px">
            <div id="progress-spinner-center" style="position:fixed;top:50%;left:50%;z-index:1000"></div>
        </div>
    </section>
    <!-- Session timeout -->
    <script>
        var progressSpinner = new ProgressSpinner();
        $(document).on("click", ".progress-spinner", function() {
            progressSpinner.start();
        });

        function relog() {
            var newloc = location.hostname;
            newloc = newloc.replace(/.cic.gc.ca/, "-cic.fjgc-gccf.gc.ca");
            newloc = newloc.replace(/.ci.gc.ca/, "-cic.fjgc-gccf.gc.ca");
            location.replace("https://" + newloc + "/mycic/gccf?relog");
            return false;
        }
    </script>
    <span class="wb-sessto wb-sessto-inited"
        data-wb-sessto="{&quot;inactivity&quot;: 480000, &quot;reactionTime&quot;: 120000, &quot;sessionalive&quot;: 480000,
	&quot;logouturl&quot;: &quot;javascript:relog()&quot;, &quot;refreshCallbackUrl&quot;: &quot;/mycic/sessionAlive&quot;, &quot;refreshOnClick&quot;: true, &quot;refreshLimit&quot;: 30000}"></span>

    <div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front ui-dialog-buttons ui-draggable"
        tabindex="-1" role="dialog" aria-describedby="externalUrlDialog" style="display: none;"
        aria-labelledby="ui-id-1">
        <div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix"><span id="ui-id-1"
                class="ui-dialog-title">&nbsp;</span><button type="button"
                class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close"
                role="button" aria-disabled="false" title="close"><span
                    class="ui-button-icon-primary ui-icon ui-icon-close"></span><span
                    class="ui-button-text ui-icon-close">close</span></button></div>
        <div id="externalUrlDialog" class="ui-dialog-content ui-widget-content"></div>
        <div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix" style="text-align: center;">
            <div class="ui-dialog-buttonset" style="float: none;"><button type="button"
                    class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button"
                    aria-disabled="false"><span class="ui-button-text">Sign out</span></button><button
                    type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only"
                    role="button" aria-disabled="false"><span
                        class="ui-button-text">Cancel</span></button><button type="button"
                    class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button"
                    aria-disabled="false"><span class="ui-button-text">Continue</span></button></div>
        </div>
    </div><a class="wb-lbx lbx-modal mfp-hide wb-lbx-inited"
        href="https://onlineservices-servicesenligne.cic.gc.ca/mycic/home#wb-sessto-modal" id="wb-auto-2"></a>
    <section id="wb-sessto-modal" class="mfp-hide modal-dialog modal-content overlay-def">
        <header class="modal-header">
            <h2 class="modal-title">Session timeout warning</h2>
        </header>
        <div class="modal-body"></div>
        <div class="modal-footer"></div>
    </section>


</body>



</html>
