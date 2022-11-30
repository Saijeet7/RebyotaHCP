<?php /*Template Name: Rebyota Support*/
get_header();
the_post();
?>
<main class="page__home">
    <section class="hero hero--alt" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/hero2.jpg')">
        <div class="container">
            <h1 class="hero__title hero__title--alt "><strong><span>RE</span>BYOTA<sup>®</sup></strong>
                Support <br> and Reimbursement
            </h1>
        </div>
        <div class="hero__banner">
            <div class="hero__bannerInner hero__bannerInner--fullWidth">
                <div class="container">
                    <p>
                        <strong>Access information and support tools for REBYOTA </strong>
                        <br>including coding, billing, coverage, reimbursement, and financial assistance.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="backgroundWrapper " style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/backgroundWrapper.jpg')">

        <section class="sectionTitle">
            <div class="container">
                <div class="sectionTitle__wrap">
                    <h2 class="sectionTitle__title"><span class="logo logo--large"><strong>RE</strong>BYOTA</span>
                        Coding, Coverage, and Reimbursement
                    </h2>
                    <p><strong>Access this REBYOTA coding, coverage, and reimbursement guide</strong> to access to
                        REBYOTA as quickly and cost-effectively as possible.
                    </p>
                </div>
            </div>
        </section>

        <section class="guideList">
            <div class="container">
                <div class="guideList__wrapper">
                    <figure class="guideList__image">
                        <img src="<?php echo get_template_directory_uri() ?> /uploads/cover.png" alt="Flowchart" />
                    </figure>
                    <div class="guideList__text">
                        <h2 class="guideList__title">
                            Coverage Considerations
                        </h2>
                        <ul class="fancyCard__list">
                            <li>Determining coverage </li>
                            <li>Prior authorization </li>
                        </ul>
                        <h2 class="guideList__title">
                            Coding & Billing
                        </h2>
                        <ul class="fancyCard__list">
                            <li>Explanation of codes for REBYOTA</li>
                            <li>Table of codes </li>
                            <li>Sample billing forms </li>
                        </ul>
                        <h2 class="guideList__title">
                            Reimbursement
                        </h2>
                        <ul class="fancyCard__list">
                            <li>Medicare </li>
                            <li>Medicaid </li>
                            <li>Private payers (commercial insurance) </li>
                        </ul>

                    </div>
                </div>
                <div class="fancyCard__button">
                    <a href="#" class="button">Download Guide
                    </a>
                </div>
            </div>
        </section>
    </div>

    <section class="fancyCard">
        <div class="container">
            <div class="fancyCard__top">
                <h2 class="sectionTitle__title"><span class="logo logo--large"><strong>RE</strong>BYOTA</span>
                    <strong> CODING</strong> AND <strong>BILLING</strong>
                </h2>
                <p><strong>Table of Codes</strong></p>
            </div>
            <div class="fancyCard__wrap">
                <div class="fancyCard__wrapInner">
                    <table class="fancyCard__table">
                        <tr>
                            <th class="fancyCard__head fancyCard__head--alt fancyCard__head--larger">
                                <p>HOSPITAL INPATIENT CODES</p>
                            </th>
                            <th class="fancyCard__head fancyCard__head--alt">
                                <p><strong>DESCRIPTION</strong>
                                </p>
                            </th>
                        </tr>
                        <tr>
                            <td class="fancyCard__content  fancyCard__content--larger fancyCard__content--alt">
                                <p><strong>C. DIFFICILE
                                        DIAGNOSIS CODES</strong>
                                </p>
                            </td>
                            <td class="fancyCard__content ">
                                <p>ICD-10</p>
                            </td>
                            <td class="fancyCard__content ">
                                <p></p>
                            </td>
                        </tr>
                        <tr>
                            <td class="fancyCard__content fancyCard__content--larger">
                                <p>Abdominal pain</p>
                            </td>
                            <td class="fancyCard__content ">
                                <p>16 (8.9%)</p>
                            </td>
                            <td class="fancyCard__content ">
                                <p>6 (6.9%)</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="fancyCard__content fancyCard__content--larger">
                                <p>Diarrhea</p>
                            </td>
                            <td class="fancyCard__content ">
                                <p>13 (7.2%)</p>
                            </td>
                            <td class="fancyCard__content ">
                                <p>3 (3.4%)</p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="fancyCard__textBottom">
                <p>Disclaimer: all codes are subject to change.
                </p>
            </div>
        </div>
    </section>

    <section class="textAccordion">
        <div class="container">
            <div class="textAccordion__accordion">
                <div class="textAcoordion__top">
                    <p>EXPLANATION OF CODES FOR REBYOTA</p>
                    <button type="button" class="textAccordion__toggle">+</button>
                </div>
                <div class="textAccordion__body">
                    <h3 class="textAccordion__bodyTitle">International Classification of Diseases, ICD-10 diagnosis codes</h3>
                    <p>ICD-10 codes are an alphanumeric coding system used to report patient conditions, illnesses, or symptoms, which support medical necessity for healthcare services.
                    </p>
                    <h3 class="textAccordion__bodyTitle"><em>Current</em> Procedural Terminology, CPT codes
                    </h3>
                    <p><em>CPT</em> codes are a numeric coding system used to report medical services and procedures related to the administration of a drug or product, as provided by healthcare professionals.</p>
                    <h3 class="textAccordion__bodyTitle">New Technology Add-on Payment, NTAP Code
                    </h3>
                    <p>An NTAP code enables additional payment to hospitals above the standard Medicare Severity Diagnosis-Related Group payment amount. A product’s NTAP designation lasts for up to 3 years for a specific indication.</p>
                    <h3 class="textAccordion__bodyTitle">Healthcare Common Procedure Coding System (HCPCS) codes: C code, J code
                    </h3>
                    <p>Each infused drug, or non-oral, non-self-administered drug that may be used in the inpatient, outpatient hospital, doctor’s office, or infusion center, is assigned a code to facilitate medical billing:
                    </p>
                    <ul class="textAccordion__description">
                        <li><strong>C codes</strong> are temporary pricing codes established by Centers for Medicare & Medicaid Services (CMS) for
                            hospital outpatient services
                        </li>
                        <li><strong>J codes</strong> are more broadly used by both government and commercial insurers. A temporary code is issued
                            when a product is approved; a permanent J code is assigned 3 to 6 months later
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="backgroundWrapper backgroundWrapper--alt" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/backgroundWrapper.jpg')">
        <section class="fancyCard">
            <div class="container">
                <div class="fancyCard__top">
                    <h2 class="sectionTitle__title"><span class="logo logo--large"><strong>RE</strong>BYOTA</span>
                        SUPPOPRT FOR <strong>PROIVIDES</strong>
                    </h2>
                </div>
                <div class="fancyCard__wrap">
                    <div class="fancyCard__wrapInner">
                        <table class="fancyCard__table">
                            <tr>
                                <th class="fancyCard__head fancyCard__head--alt fancyCard__head--larger" colspan="2">
                                    <p>Summary of Services Offered Through REBYOTA Connect</p>
                                </th>
                            </tr>
                            <tr>
                                <td class="fancyCard__content  fancyCard__content--larger " colspan="1">
                                    <p><strong>Access and
                                            Reimbursement
                                            Services</strong>
                                    </p>
                                </td>
                                <td class="fancyCard__content" colspan="2">
                                    <ul class="textAccordion__description textAccordion__description--alt">
                                        <li>Benefits investigation
                                        </li>
                                        <li>Prior authorization (PA) information
                                        </li>
                                        <li>Appeals assistance for PA or claim denials
                                        </li>
                                        <li>Billing and coding support
                                        </li>
                                    </ul>

                                </td>
                            </tr>
                            <tr>
                                <td class="fancyCard__content  fancyCard__content--larger " colspan="1">
                                    <p><strong>Co-pay Support Program</strong>
                                    </p>
                                </td>
                                <td class="fancyCard__content " colspan="2">
                                    <p>Screen patients for eligibility for co-pay support and, if eligible, initiate enrollment in
                                        the REBYOTA co-pay program</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="fancyCard__content  fancyCard__content--larger " colspan="1">
                                    <p><strong>Patient Assistance Free Drug Program</strong>
                                    </p>
                                </td>
                                <td class="fancyCard__content" colspan="2">
                                    <p>Screen patients for eligibility into the patient assistance program which provides REBYOTA at no cost to eligible patients. Assistance for eligible patients will be provided
                                        in the form of free product shipped to site of administration or reimbursement for the purchase price of the product if processed after product administration.
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td class="fancyCard__content  fancyCard__content--larger" colspan="1">
                                    <p><strong>Patient Education</strong>
                                    </p>
                                </td>
                                <td class="fancyCard__content" colspan="2">
                                    <p>Refer patients to REBYOTA educational materials, C. <em>difficile</em> support groups, and/or state health exchanges if they are uninsured.
                                    </p>
                                </td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </section>

        <section class="columnBlock">
            <div class="container">
                <div class="sectionTitle__wrap sectionTitle__wrap--center">
                    <p><strong>To enroll a patient in REBYOTA CONNECT, </strong> both provider<br />
                        and patient must complete certain sections of the enrollment form.<br />
                        Please reach out to 1-877-REBYOTA with any questions.
                    </p>
                </div>
                <div class="columnBlock__row">
                    <div class="columnBlock__column">
                        <div class="columnBlock__text">
                            <p>Enrollment Form</p>
                        </div>
                        <a href="#" class="button">Download</a>
                    </div>
                    <div class="columnBlock__column">
                        <div class="columnBlock__text">
                            <p>Rebyota CONNECT Hub Enrollment Instructions
                                and Checklist</p>
                        </div>
                        <a href="#" class="button">Download</a>
                    </div>
                </div>
            </div>
        </section>


    </div>
    <section class="columnBlock">
        <div class="container">
            <h2 class="sectionTitle__title"><span class="logo logo--large"><strong>RE</strong>BYOTA</span>
                SUPPOPRT FOR <strong>PATIENTS</strong>
            </h2>
            <div class="columnBlock__row columnBlock__row--flexStart">
                <div class="columnBlock__column columnBlock__column--alt">
                    <h3 class="columnBlock__title">Co-Pay Assistance Program</h3>
                    <div class="columnBlock__descritpion">
                        <p>Eligible, commercially insured patients may pay as little as $100 of their co-pay or coinsurance requirements: terms and conditions apply</p>
                    </div>
                </div>
                <div class="columnBlock__column columnBlock__column--alt">
                    <h3 class="columnBlock__title">Patient Assistance Program</h3>
                    <div class="columnBlock__descritpion">
                        <p>A free medicine program for uninsured/underinsured patients who meet eligibility criteria: terms and conditions apply</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="textAccordion">
        <div class="container">
            <div class="textAccordion__accordion">
                <div class="textAcoordion__top">
                    <p>Patient Assistance Program Details</p>
                    <button type="button" class="textAccordion__toggle">+</button>
                </div>
                <div class="textAccordion__body">
                    <h3 class="textAccordion__bodyTitle">International Classification of Diseases, ICD-10 diagnosis codes</h3>
                    <p>ICD-10 codes are an alphanumeric coding system used to report patient conditions, illnesses, or symptoms, which support medical necessity for healthcare services.
                    </p>
                    <h3 class="textAccordion__bodyTitle"><em>Current</em> Procedural Terminology, CPT codes
                    </h3>
                    <p><em>CPT</em> codes are a numeric coding system used to report medical services and procedures related to the administration of a drug or product, as provided by healthcare professionals.</p>
                    <h3 class="textAccordion__bodyTitle">New Technology Add-on Payment, NTAP Code
                    </h3>
                    <p>An NTAP code enables additional payment to hospitals above the standard Medicare Severity Diagnosis-Related Group payment amount. A product’s NTAP designation lasts for up to 3 years for a specific indication.</p>
                    <h3 class="textAccordion__bodyTitle">Healthcare Common Procedure Coding System (HCPCS) codes: C code, J code
                    </h3>
                    <p>Each infused drug, or non-oral, non-self-administered drug that may be used in the inpatient, outpatient hospital, doctor’s office, or infusion center, is assigned a code to facilitate medical billing:
                    </p>
                    <ul class="textAccordion__description">
                        <li><strong>C codes</strong> are temporary pricing codes established by Centers for Medicare & Medicaid Services (CMS) for
                            hospital outpatient services
                        </li>
                        <li><strong>J codes</strong> are more broadly used by both government and commercial insurers. A temporary code is issued
                            when a product is approved; a permanent J code is assigned 3 to 6 months later
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="textAccordion">
        <div class="container">
            <div class="textAccordion__accordion">
                <div class="textAcoordion__top">
                    <p>Copay Assistance Program Details</p>
                    <button type="button" class="textAccordion__toggle">+</button>
                </div>
                <div class="textAccordion__body">
                    <h3 class="textAccordion__bodyTitle">International Classification of Diseases, ICD-10 diagnosis codes</h3>
                    <p>ICD-10 codes are an alphanumeric coding system used to report patient conditions, illnesses, or symptoms, which support medical necessity for healthcare services.
                    </p>
                    <h3 class="textAccordion__bodyTitle"><em>Current</em> Procedural Terminology, CPT codes
                    </h3>
                    <p><em>CPT</em> codes are a numeric coding system used to report medical services and procedures related to the administration of a drug or product, as provided by healthcare professionals.</p>
                    <h3 class="textAccordion__bodyTitle">New Technology Add-on Payment, NTAP Code
                    </h3>
                    <p>An NTAP code enables additional payment to hospitals above the standard Medicare Severity Diagnosis-Related Group payment amount. A product’s NTAP designation lasts for up to 3 years for a specific indication.</p>
                    <h3 class="textAccordion__bodyTitle">Healthcare Common Procedure Coding System (HCPCS) codes: C code, J code
                    </h3>
                    <p>Each infused drug, or non-oral, non-self-administered drug that may be used in the inpatient, outpatient hospital, doctor’s office, or infusion center, is assigned a code to facilitate medical billing:
                    </p>
                    <ul class="textAccordion__description">
                        <li><strong>C codes</strong> are temporary pricing codes established by Centers for Medicare & Medicaid Services (CMS) for
                            hospital outpatient services
                        </li>
                        <li><strong>J codes</strong> are more broadly used by both government and commercial insurers. A temporary code is issued
                            when a product is approved; a permanent J code is assigned 3 to 6 months later
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="textBlock">
        <div class="container">
            <div class="textBlock__text">
                <h2 class="textBlock__title">Reimbursement</h2>
                <p>Understand REBYOTA product reimbursement for Medicare, Medicaid, and private payers (commercial insurance).</p>
            </div>
        </div>
    </section>

    <section class="textAccordion">
        <div class="container">
            <div class="textAccordion__accordion">
                <div class="textAcoordion__top">
                    <p>Medicare Coverage</p>
                    <button type="button" class="textAccordion__toggle">+</button>
                </div>
                <div class="textAccordion__body">
                    <h3 class="textAccordion__bodyTitle">International Classification of Diseases, ICD-10 diagnosis codes</h3>
                    <p>ICD-10 codes are an alphanumeric coding system used to report patient conditions, illnesses, or symptoms, which support medical necessity for healthcare services.
                    </p>
                    <h3 class="textAccordion__bodyTitle"><em>Current</em> Procedural Terminology, CPT codes
                    </h3>
                    <p><em>CPT</em> codes are a numeric coding system used to report medical services and procedures related to the administration of a drug or product, as provided by healthcare professionals.</p>
                    <h3 class="textAccordion__bodyTitle">New Technology Add-on Payment, NTAP Code
                    </h3>
                    <p>An NTAP code enables additional payment to hospitals above the standard Medicare Severity Diagnosis-Related Group payment amount. A product’s NTAP designation lasts for up to 3 years for a specific indication.</p>
                    <h3 class="textAccordion__bodyTitle">Healthcare Common Procedure Coding System (HCPCS) codes: C code, J code
                    </h3>
                    <p>Each infused drug, or non-oral, non-self-administered drug that may be used in the inpatient, outpatient hospital, doctor’s office, or infusion center, is assigned a code to facilitate medical billing:
                    </p>
                    <ul class="textAccordion__description">
                        <li><strong>C codes</strong> are temporary pricing codes established by Centers for Medicare & Medicaid Services (CMS) for
                            hospital outpatient services
                        </li>
                        <li><strong>J codes</strong> are more broadly used by both government and commercial insurers. A temporary code is issued
                            when a product is approved; a permanent J code is assigned 3 to 6 months later
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="textAccordion">
        <div class="container">
            <div class="textAccordion__accordion">
                <div class="textAcoordion__top">
                    <p>Medicaid Coverage</p>
                    <button type="button" class="textAccordion__toggle">+</button>
                </div>
                <div class="textAccordion__body">
                    <h3 class="textAccordion__bodyTitle">International Classification of Diseases, ICD-10 diagnosis codes</h3>
                    <p>ICD-10 codes are an alphanumeric coding system used to report patient conditions, illnesses, or symptoms, which support medical necessity for healthcare services.
                    </p>
                    <h3 class="textAccordion__bodyTitle"><em>Current</em> Procedural Terminology, CPT codes
                    </h3>
                    <p><em>CPT</em> codes are a numeric coding system used to report medical services and procedures related to the administration of a drug or product, as provided by healthcare professionals.</p>
                    <h3 class="textAccordion__bodyTitle">New Technology Add-on Payment, NTAP Code
                    </h3>
                    <p>An NTAP code enables additional payment to hospitals above the standard Medicare Severity Diagnosis-Related Group payment amount. A product’s NTAP designation lasts for up to 3 years for a specific indication.</p>
                    <h3 class="textAccordion__bodyTitle">Healthcare Common Procedure Coding System (HCPCS) codes: C code, J code
                    </h3>
                    <p>Each infused drug, or non-oral, non-self-administered drug that may be used in the inpatient, outpatient hospital, doctor’s office, or infusion center, is assigned a code to facilitate medical billing:
                    </p>
                    <ul class="textAccordion__description">
                        <li><strong>C codes</strong> are temporary pricing codes established by Centers for Medicare & Medicaid Services (CMS) for
                            hospital outpatient services
                        </li>
                        <li><strong>J codes</strong> are more broadly used by both government and commercial insurers. A temporary code is issued
                            when a product is approved; a permanent J code is assigned 3 to 6 months later
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="textAccordion">
        <div class="container">
            <div class="textAccordion__accordion">
                <div class="textAcoordion__top">
                    <p>Private Payers (Commercial Insurance)</p>
                    <button type="button" class="textAccordion__toggle">+</button>
                </div>
                <div class="textAccordion__body">
                    <h3 class="textAccordion__bodyTitle">International Classification of Diseases, ICD-10 diagnosis codes</h3>
                    <p>ICD-10 codes are an alphanumeric coding system used to report patient conditions, illnesses, or symptoms, which support medical necessity for healthcare services.
                    </p>
                    <h3 class="textAccordion__bodyTitle"><em>Current</em> Procedural Terminology, CPT codes
                    </h3>
                    <p><em>CPT</em> codes are a numeric coding system used to report medical services and procedures related to the administration of a drug or product, as provided by healthcare professionals.</p>
                    <h3 class="textAccordion__bodyTitle">New Technology Add-on Payment, NTAP Code
                    </h3>
                    <p>An NTAP code enables additional payment to hospitals above the standard Medicare Severity Diagnosis-Related Group payment amount. A product’s NTAP designation lasts for up to 3 years for a specific indication.</p>
                    <h3 class="textAccordion__bodyTitle">Healthcare Common Procedure Coding System (HCPCS) codes: C code, J code
                    </h3>
                    <p>Each infused drug, or non-oral, non-self-administered drug that may be used in the inpatient, outpatient hospital, doctor’s office, or infusion center, is assigned a code to facilitate medical billing:
                    </p>
                    <ul class="textAccordion__description">
                        <li><strong>C codes</strong> are temporary pricing codes established by Centers for Medicare & Medicaid Services (CMS) for
                            hospital outpatient services
                        </li>
                        <li><strong>J codes</strong> are more broadly used by both government and commercial insurers. A temporary code is issued
                            when a product is approved; a permanent J code is assigned 3 to 6 months later
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="imageBlock">
        <div class="container">
            <div class="imageBlock__wrap">
                <div class="textBlock__text">
                    <h2 class="textBlock__title">Downloadable Forms</h2>
                    <p>Use these resources to streamline access to REBYOTA for your patients with recurrent C. <em>difficile</em> infection. </p>
                </div>
                <div class="imageBlock__wrapInner">
                    <div class="imageBlock__content">
                        <figure class="imageBlock__image">
                            <img src="<?php echo get_template_directory_uri() ?> /uploads/img.png" alt="Flowchart" />
                        </figure>
                        <div class="imageBlock__text">
                            <p>Prior Authorization Checklist</p>
                            <a href="#" class="button">Download</a>
                        </div>
                    </div>
                    <div class="imageBlock__content">
                        <figure class="imageBlock__image">
                            <img src="<?php echo get_template_directory_uri() ?> /uploads/img.png" alt="Flowchart" />
                        </figure>
                        <div class="imageBlock__text">
                            <p>Sample Appeals Letter</p>
                            <a href="#" class="button">Download</a>
                        </div>
                    </div>
                    <div class="imageBlock__content">
                        <figure class="imageBlock__image">
                            <img src="<?php echo get_template_directory_uri() ?> /uploads/img.png" alt="Flowchart" />
                        </figure>
                        <div class="imageBlock__text">
                            <p>Sample Letter of Medical Necessity</p>
                            <a href="#" class="button">Download</a>
                        </div>
                    </div>
                    <div class="imageBlock__content">
                        <figure class="imageBlock__image">
                            <img src="<?php echo get_template_directory_uri() ?> /uploads/img.png" alt="Flowchart" />
                        </figure>
                        <div class="imageBlock__text">
                            <p>Sample CMS 1450 Billing Form</p>
                            <a href="#" class="button">Download</a>
                        </div>
                    </div>
                    <div class="imageBlock__content">
                        <figure class="imageBlock__image">
                            <img src="<?php echo get_template_directory_uri() ?> /uploads/img.png" alt="Flowchart" />
                        </figure>
                        <div class="imageBlock__text">
                            <p>Sample CMS 1500 Billing Form</p>
                            <a href="#" class="button">Download</a>
                        </div>
                    </div>
                    <div class="imageBlock__content">
                        <figure class="imageBlock__image">
                            <img src="<?php echo get_template_directory_uri() ?> /uploads/img.png" alt="Flowchart" />
                        </figure>
                        <div class="imageBlock__text">
                            <p>REBYOTA CONNECT Hub Enrollment Form</p>
                            <a href="#" class="button">Download</a>
                        </div>
                    </div>
                    <div class="imageBlock__content">
                        <figure class="imageBlock__image">
                            <img src="<?php echo get_template_directory_uri() ?> /uploads/img.png" alt="Flowchart" />
                        </figure>
                        <div class="imageBlock__text">
                            <p>REBYOTA CONNECT Hub Enrollment Instructions and Checklist</p>
                            <a href="#" class="button">Download</a>
                        </div>
                    </div>
                    <div class="imageBlock__content">
                        <figure class="imageBlock__image">
                            <img src="<?php echo get_template_directory_uri() ?> /uploads/img.png" alt="Flowchart" />
                        </figure>
                        <div class="imageBlock__text">
                            <p>REBYOTA Coding, Coverage, and Reimbursement Guide</p>
                            <a href="#" class="button">Download</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="backgroundWrapper " style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/backgroundWrapper.jpg')">
        <section class="cardBlock">
            <div class="container">
                <div class="cardBlock__wrapper">

                    <div class="cardBlock__card">
                        <figure class="cardBlock__img">
                            <img src="<?php echo get_template_directory_uri() ?>/uploads/card.jpg" alt="Card Image" />
                        </figure>
                        <h2 class="cardblock__title">
                            Ordering Instructions
                        </h2>
                        <p>There are multiple ways to order REBYOTA: through major specialty distributors, specialty pharmacies, or directly from Ferring.
                        </p>
                        <a href="#" class="button">Order REBYOTA</a>
                    </div>

                    <div class="cardBlock__card">
                        <figure class="cardBlock__img">
                            <img src="<?php echo get_template_directory_uri() ?>/uploads/card.jpg" alt="Card Image" />
                        </figure>
                        <h2 class="cardblock__title">
                            Why Rebyota
                        </h2>
                        <p>Answers to REBYOTA questions including administration, safety, patient expectations, and more. </p>
                        <a href="#" class="button">Why Rebyota</a>
                    </div>

                </div>
            </div>
        </section>

    </div>
</main>
<?php get_footer(); ?>