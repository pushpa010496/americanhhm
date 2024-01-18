<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'sitename' => 'AmericanHHM',
    'siteshortname' => 'AmericanHHM',
    'adminemail' => 'omplenquiry@ochre-media.com',

    'subscribe-email' => 'subscribe@ochre-media.com',

    'advert-email' => 'advertise@ochre-media.com',
    //'adminemail' => 'nagaraj@ochre-media.com',  

    'mediapack_path' => config('app.url').'mediapack/pdf/AmericanHHM-MediaPack.pdf',

    'mediapack_download_path' => asset('public/mediapack/pdf/AmericanHHM-MediaPack.pdf'),

    'authorguideline_pdf' =>config('app.url').'authorguidelines/pdf/1659009375-guideline-editorial-guidelines-ahhm.pdf',

    //'editorial_calendar_pdf' => config('app.url').'calendar/pdf/pharmafocus-asia-editorial-calendar.pdf',
    'editorial_calendar_pdf' => config('app.url').'calendar/pdf/AmericanHHM-Final-Editoial-Calendar.pdf',
    'editorial_calendar_download_pdf' => asset('public/calendar/pdf/AmericanHHM-Final-Editoial-Calendar.pdf'),
    //advertise page mail send
    'advertise_email' => 'advertise@americanhhm.com',  
    'advertise_mail_to' => 'mailto:advertise@americanhhm.com ?subject=Contact%20Pharma%20Focus%20Asia%20for%20Advertising&cc=info@pharmafocusasia.com&bcc=web@ochre-media.com
',  
   
    //Email Auto replies
    'casestudies_client' => 'Know More With Each Click: AmericanHHM Case Studies',
    'casestudies_admin' => ' Downloaded Casestudy | AmericanHHM', //client@email.com |  Downloaded Casestudy | AsianHHM

    'whitepaper_client' => 'Know More With Each Click: AmericanHHM Whitepaperr',
    'whitepaper_admin' => ' Downloaded Whitepaper | AmericanHHM', //client@email.com |  Downloaded Whitepaper | AsianHHM

    'printads_client' => 'Thank you for showing interest in Print Advertising',
    'printads_admin' => 'Thank you for showing interest in Print Advertising',

    'bannerads_client' => 'AmericanHHM Banner Advertisement',
    'bannerads_admin' => 'AmericanHHM Banner Advertisement',    

    'emailMarketing_client' => 'AmericanHHM e-Mail Marketing',
    'emailMarketing_admin' => 'AmericanHHM e-Mail Marketing',    

    'enewslettermarketing_client' => 'Thank you for showing interest in Print Advertising',
    'enewslettermarketing_admin' => 'Thank you for showing interest in Print Advertising',    

    'advertise_client' => 'AmericanHHM – Media Pack & Promotional Services',
    'advertise_admin' => ' | AmericanHHM – Media Pack Download | Advertising Enquiry', //client@email.com | AsianHHM – Media Pack Download | Advertising Enquiry
    
    //e-newsletter-subscribe
    'enewsletter-subscribe_client' => 'AmericanHHM E-Newsletter | Stay informed with the latest',
    'enewsletter-subscribe_admin' => ' New subscriber has been signed up!', //client@email.com | Subscribed for E-NewsLetter | AsianHHM

    //editorial-calendar
    'editorial-calendar_client' => "AmericanHHM | Editorial Calendar  Download Successful",
    'editorial-calendar_admin' => ' | Downloaded Editorial Calendar ', //client@email.com | Downloaded Editorial Calendar 2019   

    //registration
    'registration_client' => 'Thank you for subscribing!',
    'registration_admin' => 'New subscription!', //client@email.com | Subscribed for E-NewsLetter | AsianHHM

    //post-event
    'postevent_client' => 'AmericanHHM Events | Your Registration is Successful!',
    'postevent_admin' => 'New Event Registration for AmericanHHM!', 

    //mediapacks
    'mediapacks_client' => 'AmericanHHM – Media Pack & Promotional Services',
    'mediapacks_admin' => ' downloaded Media pack ', 

    //e-book
    'ebook_client' => 'AmericanHHM e-book Access',
    'ebook_admin' => 'Thank You For Accessing our E-book',

    //e-book subscribe
    'ebook_subscribe_client' => 'AmericanHHM | Thank You For Subscribing',
    'ebook_subscribe_admin' => ' | Subscribed for E-book | AmericanHHM', //client@email.com | Subscribed for E-book | AHHM 

    //e-book archives
    'ebook_archive_client' => 'AmericanHHM e-book Access',
    'ebook_archive_admin' => 'AmericanHHM e-book Access',

    //e-book welcome - on home page
    'ebook_welcome_client' => 'Thank You For Accessing',
    'ebook_welcome_admin' => 'Notification - AmericanHHM Latest EBook Access',

    //authorguidelines
    'authorguideline_client' => 'We Prescribe, You Inscribe: AmericanHHM Author Guidelines',
    'authorguideline_admin' => ' Downloaded Author Guidelines | AmericanHHM',  


    //Single page content
    // root/editorialsection  
    'editorialsection_title' => 'Editorial Section',
    'editorialsection_text' => 'American Hospital & Healthcare Management offers current, useful, and interesting content. Each aspect of the health industry is covered by the journal, which can be largely divided into the following areas. Each of these parts of the magazine contains a wide variety of current concerns. They consist of:',
    // root/knowledgebank  
    'knowledgebank_title' => 'Knowledge Bank',
    'knowledgebank_text' => "We regularly update the Knowledge Bank to reflect how quickly health care is changing. We also have articles on novel and thought-provoking topics. You can find them here.",
    // root/magazine
    'magazine_title' => 'AmericanHHM Magazine',
    'magazine_text' => 'This Healthcare Magazine is the source for a plethora of unique Healthcare articles. Several notable figures in the medical industry, from top med schools and hospitals are featured in the Medical Sciences section, with their expert knowledge of the field.',
     // root/e-newsletter
    'enewsletter_title' => 'e-Newsletter',
    'enewsletter_text' => 'Receive monthly industry news delivered to your email, including articles, expert conferences, computer trends, research ideas, etc. To quickly access Verticaltalk Healthcare, fill out the form below with your data. To keep up to date, read the most recent articles written by health professionals.',

    // root/archives
    'archives_title' => 'Archives',
    'archives_text' => 'AmericanHHM magazine features articles about the latest pharmaceutical industry technologies and developments. Our magazine services directory contains listings for all your needs, covering manufacturing, clinical trials, research and development, strategy and more! Enter your email id to gain access to all of AmericanHHMs digital issues.',

    // root/e-book
    'e-book_title' => 'e-Book Archives',
    'e-book_text' => 'The e-Book version of AmericanHHM provides you the feel of print edition in digital format. Loaded with a host of user friendly features, AmericanHHM e-Book provides a whole new experience and makes reading the magazine a pleasure to treasure on industry know-how. The inbuilt tools provide easy manoeuvring through the e-Book.',

    // root/archives-magazine/32 post
    'archives-magazine_title' => 'AmericanHHM Magazine',
    'archives-magazine_text' => 'This Pharma Magazine is the source for a plethora of unique Pharma articles. Several notable figures from top pharma organisations are featured in the R&D, Manufacturing and Clinical Trials sections, with their expert knowledge of the field.',

    //authorguidelines-download
    'authorguidelines-download_title' => 'Author Guidelines Download',
    'authorguidelines-download_text' => 'American Hospital & Healthcare Management offers cutting-edge content that is up-to-date with relevant information. The health industry, which is usually divided into the following divisions, is covered in detail by the journal. These sections of journals each cover a wide range of contemporary issues. These include:',

    //advisory-board
    'advisory-board_title' => 'Advisory Board',
    'advisory-board_text' => "The Editorial Advisory Board of AmericanHHM comprises of industry thought leaders with wide-ranging experience, expertise and significant contributions to the pharmaceutical industry. We thank and acknowledge our Editorial Advisory Board members' willingness to share their expertise and industry insights with us to offer our readers the most appropriate editorials covering issues of paramount importance to the industry.",

    // testimonials
    'testimonials_title' => 'Testimonials',
    'testimonials_text' => 'List of Pharma testimonals given, This is great, to the point and informative. The layout is also very clear unlike some that are so busy with different icons everywhere.',    

    //articles
    'articles_title' => 'Articles',
    'articles_text' => "Renowned heads of hospitals and healthcare companies as well as other subject matter experts write articles on crucial issues in the healthcare industry. This section addresses issues that are being discussed right now in industries like information technology, healthcare management, medical sciences, surgical specialties, technology, and diagnostics.",  

    //interviews  
    'interviews_title' => 'Interviews',
    'interviews_text' => 'Health industry experts address important topics in this section, including cutting-edge trends, technology, managerial insights, and strategies.',  

    //technotrends
    'technotrends_title' => 'Techno Trends',
    'technotrends_text' => 'This section presents the latest developments, inventions, and revolutionary technologies that change the face of healthcare.', 

    //projects 
    'projects_title' => 'Projects',
    'projects_text' => 'This section shows the construction and renovation projects in healthcare in America.', 

    //healthcare-reports
    'healthcare-reports_title' => 'Reports',
    'healthcare-reports_text' => "The AmHHM industry reports provide strategic analysis and perceptions of the healthcare sector. They help to understand the trends in healthcare insights. The fundamental analysis of the industry is facilitated by our industry reports.", 

    //researchinsights
    'researchinsights_title' => 'Research Insights',
    'researchinsights_text' => 'This section focuses on recent global studies and discoveries in the various fields of healthcare.', 

    //bookshelf
    'bookshelf_title'=> 'Book Shelf',
    'bookshelf_text'=> 'This section presents the leading authors of the health industry and their most recent works.',

    //casestudies
    'casestudies_title'=> 'Case Studies',
    'casestudies_text'=> 'Health case studies focus on specific and provide information on how a particular technology or advancement helps medical personnel. This section presents case studies on trade trends, technological developments, products, and services.',


    //casestudies
    'whitepapers_title'=> 'Whitepapers',
    'whitepapers_text'=> 'This section of the article provides white papers on current issues, technology, and other topics to give readers valuable information and knowledge. All aspects of the health industry are addressed in the white papers of this section.',

    //news
    'news_title'=> 'News',
    'news_text'=> "Looking for the latest health news?<br />
    Look at the latest hospital news, the best health news, and the best business publications in the health sector. The health news section shows daily news that is relevant to the industrial sectors are displayed in the healthcare sector's news section.",

    //pressreleases
    'pressreleases_title'=> 'Press Releases',
    'pressreleases_text'=> 'Information on the most recent studies in health and medical sciences is provided by American Hospital and Healthcare Management, with a focus on healthcare and preventive medicine in particular. In addition, it offers the most advanced health care techniques and considerable improvements in hospital administration.',

    //events
    'events_title'=> 'Events and Exhibitions',
    'events_text'=> "On this page, you will find all the information you need for current and upcoming
     events in the health sector. It is a calendar of events, trade shows, and exhibitions for each month.
      By allowing purchasing executives and event managers to keep their schedules up to date with
       major industry events, this tool offers them value.Fill out the fields on this page, if you want to add your events and exhibitions to the American Hospital & Healthcare 
    Management website.",

    //post-event
    'post-event_title'=> 'AmericanHHM',

    //industry-reports
    'industry_reports'=> 'Industry Reports',

    'getpublished_client' => 'AmHHM Contributor Registration',
    'getpublished_admin' => 'Get Published', 



];
