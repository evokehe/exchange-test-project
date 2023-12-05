<?php
require_once "logic/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_name; ?></title>
    <link rel="shortcut icon" href="assets/ico.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/loading.css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/terms.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light nav">
    <div class="centering">
        <a class="navbar-brand" href="/">
            <div class="logo">
                <p><?php echo $logo; ?></p>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto"></ul>
            <span class="navbar-text nav-menu">
                <ul class="d-flex">
                    <!-- <li onclick="goTo('pairs')" class="hover-underline-animation">Pairs</li> -->
                    <li  class="lng-about hover-underline-animation">About Us</li>
                    <li  class="lng-faq hover-underline-animation">FAQ</li>
                    <li class=" hover-underline-animation"><a href="/aml-kyc">AML/KYC</a></li>
                    <li class="lng-terms hover-underline-animation"><a href="/terms">Terms</a></li>
                    <li>
                        <select class="select-language">
                            <option value="en">EN</option>
                            <option value="ru">RU</option>
                        </select>
                    </li>
                </ul>
            </span>
        </div>
        </div>
    </nav>


<section class="terms_section">
<div class="centering">
  <div class="terms">
    <div class="terms_title">
      <div class="">
        <img src="assets/doc.png" alt="">
      </div>
      <div class="">
        <p class="lng-aml-title"></p>
      </div>
    </div>

    <div class="terms_body">
      <div class="style_content-wrapper__DmGYX" id="ui-content-wrapper">
           <div class="layout_generic-page-container__ExCsy">
               <div class="layout_generic-root-wrapper-slim___wRNv">
                   <p class="cl-para style_wrapper-paragraph__ptRNI" style="margin:30px 0">Last Updated: February, 2022</p>
                   <section class="style_section__PAjeK">
                       <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">This document gives an overview of the standards of the “Know Your Customer” and “Anti-Money Laundering” policies, thereby setting our practices for the prevention of money-laundering activities while dealing with our users.</p><br>
                       <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">The objective of AML/KYC Policy is to prevent <?php echo $site_name ?> from being used, intentionally or unintentionally, by criminal elements for money-laundering activities. The Policy also mandates making reasonable efforts to determine the true identity and beneficial ownership of accounts, source of funds, the nature of customer’s business, the reasonableness of operations in the account in relation to the customer’s business, etc., which in turn helps us to manage its risks prudently.</p><br>
                       <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">We strive to protect our customers from fraudulent and scam activities in the crypto assets sphere. <?php echo $site_name ?> employs a steadfast approach in the implementation of the latest recommendations and revised guidelines by FATF, European Parliament, and regulators of the financial industry by and large. Our in-compliance policy stance is designed to detect funds proven to be involved in illicit activities as well as to protect the funds of our customers who have fallen victims to hacks, ransomware and malware attacks. The toolkit at work committed to fighting money laundering and its implications is comprised of policy regulations in conjunction with recent developments in software aimed at tracking suspicious transactions in real time.</p><br>
                       <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">Our AML/KYC Policy, procedures, and internal controls are designed to ensure compliance with all applicable regulations and rules and will be reviewed and updated on a regular basis to ensure appropriate policies, procedures, and internal controls are in place, to account for both changes in regulations and changes in our business.</p><br>
                       <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">Glossary: </p>
                       <ul id="" class="cl-list style_wrapper-list__d_vdd">
                           <li class="style_wrapper-list-item__AnWCw cl-list__item style_is-regular-bullet__x_Bwu style_no-bullet__QgIs6 " data-starts-with="">
                               <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">AML Anti-Money Laundering</p>
                           </li>
                           <li class="style_wrapper-list-item__AnWCw cl-list__item style_is-regular-bullet__x_Bwu style_no-bullet__QgIs6 " data-starts-with="">
                               <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">KYC Know Your Customer</p>
                           </li>
                           <li class="style_wrapper-list-item__AnWCw cl-list__item style_is-regular-bullet__x_Bwu style_no-bullet__QgIs6 " data-starts-with="">
                               <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">CIP Customer Identification Program</p>
                           </li>
                           <li class="style_wrapper-list-item__AnWCw cl-list__item style_is-regular-bullet__x_Bwu style_no-bullet__QgIs6 " data-starts-with="">
                               <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">PEP Politically Exposed Persons</p>
                           </li>
                           <li class="style_wrapper-list-item__AnWCw cl-list__item style_is-regular-bullet__x_Bwu style_no-bullet__QgIs6 " data-starts-with="">
                               <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">STR Suspicious Transaction Reporting</p>
                           </li>
                           <li class="style_wrapper-list-item__AnWCw cl-list__item style_is-regular-bullet__x_Bwu style_no-bullet__QgIs6 " data-starts-with="">
                               <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">SAR Suspicious Activity Reporting</p>
                           </li>
                       </ul><br>
                       <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">The Policy covers the following matters:</p>
                       <ul id="" class="cl-list style_wrapper-list__d_vdd">
                           <li class="style_wrapper-list-item__AnWCw cl-list__item style_is-regular-bullet__x_Bwu style_no-bullet__QgIs6 " data-starts-with="">
                               <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">CUSTOMER IDENTIFICATION PROCEDURE (CIP)</p>
                           </li>
                           <li class="style_wrapper-list-item__AnWCw cl-list__item style_is-regular-bullet__x_Bwu style_no-bullet__QgIs6 " data-starts-with="">
                               <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">RECORDKEEPING</p>
                           </li>
                           <li class="style_wrapper-list-item__AnWCw cl-list__item style_is-regular-bullet__x_Bwu style_no-bullet__QgIs6 " data-starts-with="">
                               <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">AML COMPLIANCE OFFICER</p>
                           </li>
                           <li class="style_wrapper-list-item__AnWCw cl-list__item style_is-regular-bullet__x_Bwu style_no-bullet__QgIs6 " data-starts-with="">
                               <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">MONITORING OF TRANSACTIONS</p>
                           </li>
                           <li class="style_wrapper-list-item__AnWCw cl-list__item style_is-regular-bullet__x_Bwu style_no-bullet__QgIs6 " data-starts-with="">
                               <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">RISK MANAGEMENT</p>
                           </li>
                           <li class="style_wrapper-list-item__AnWCw cl-list__item style_is-regular-bullet__x_Bwu style_no-bullet__QgIs6 " data-starts-with="">
                               <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">COLLABORATION WITH LAW ENFORCEMENT AGENCIES</p>
                           </li>
                       </ul>
                   </section>
                   <section class="style_section__PAjeK">
                       <h2 class="cl-heading style_heading__mFYLj style_color-gray__ys0OB style_size-md__IN3MI" style="zoom:1;text-align:center;margin-bottom:2rem">1. CUSTOMER IDENTIFICATION PROCEDURE (CIP)</h2>
                       <p class="cl-para style_wrapper-paragraph__ptRNI text-bold style_is-shaded__4LIyf">CIP applies to transactions that are spotted by our scoring system as suspicious. We will collect certain customer identification information from each customer who passes CIP; utilize risk-based measures to verify the identity of each customer who passes CIP; record customer identification information and the verification methods and results; provide adequate CIP notice to customers that we will seek identification information from to verify their identities.</p><br>
                       <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf style_is-bold__N5VPL">a. Identification</p><br>
                       <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">In case a transaction is spotted by our risk scoring system as suspicious, the transaction will be put on hold, and we will collect the following information from the customers, if applicable, from any person, entity, or organization:</p><br>
                       <ol id="" class="cl-list style_wrapper-list__d_vdd">
                           <li class="style_wrapper-list-item__AnWCw cl-list__item style_is-enum-bullet__I_zcz " data-starts-with="">
                               <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">the full name;</p>
                           </li>
                           <li class="style_wrapper-list-item__AnWCw cl-list__item style_is-enum-bullet__I_zcz " data-starts-with="">
                               <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">date of birth (for an individual);</p>
                           </li>
                           <li class="style_wrapper-list-item__AnWCw cl-list__item style_is-enum-bullet__I_zcz " data-starts-with="">
                               <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">the address, which will be residential and business street address (for an individual) or a principal place of business, local office, or other physical location (for a person other than an individual); and</p>
                           </li>
                           <li class="style_wrapper-list-item__AnWCw cl-list__item style_is-enum-bullet__I_zcz " data-starts-with="">
                               <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">for an individual, a valid government-issued identification, evidencing nationality or residence and bearing a photograph or a similar safeguard, such as a driver’s license or passport; and for a person other than an individual, documents showing the existence of the entity, such as certified articles of incorporation, a government-issued business license, a partnership agreement or a trust instrument.</p>
                           </li>
                       </ol><br>
                       <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">The customer has an obligation to update all the information if there is any change.</p><br>
                       <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf style_is-bold__N5VPL">b. Customers Who Provide Misleading Information</p><br>
                       <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">After providing the information, the customer must ensure that the information is true, complete, and timely updated. If there are any grounds for believing that any of the information customer provided is incorrect, false, outdated, or incomplete, we reserve the right to send the customer a notice to demand correction and, as the case may be, blacklist the existing account and terminate all or part of the services we provide for the said customer.</p><br>
                       <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf style_is-bold__N5VPL">c. Verifying Information</p><br>
                       <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">Based on the risk, and to the extent reasonable and practicable, we will proceed with the verification to the extent that we have collected all information needed in order to know the true identity of our customers by using risk-based procedures to verify and document the accuracy of the information we get about our customers.</p><br>
                       <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">We have appointed a Third-Party service provider, namely Sum &amp; Substance Ltd, which entirely complies with our Privacy Policy in respect to processing the personal information of our customers. Sum &amp; Substance Ltd will analyze the information we obtain to determine (1) whether the information is sufficient to form a reasonable belief that we know the true identity of the customer (e.g., whether the information is logical or contains inconsistencies); (2) whether the documents provided by the customers are valid and do not appear in the Specially Designated Nationals and Blocked Persons List or any other lists of sanctioned individuals.</p><br>
                       <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">We will verify the information within a reasonable time, depending on the nature of the account and risk level of transactions. We may refuse to complete a transaction before we have verified the information, or in some instances, when we need more time, we may, pending verification, restrict transactions and the associated account under suspicion. If we find suspicious information that indicates possible money laundering, terrorist financing activity, or other suspicious activity, we will, after internal consultation with the firm’s AML Compliance Officer, file a SAR/STR in accordance with applicable laws and regulations.</p><br>
                       <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf style_is-bold__N5VPL">d. Lack of Verification</p><br>
                       <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">When we cannot form a reasonable belief that we know the true identity of a customer, we will do the following: (1) request additional information; (2) not verify an account; (3) blacklist account after attempts to verify the customer’s identity fail; and (4) determine whether it is necessary to file a SAR/STR in accordance with applicable laws and regulations.</p><br>
                       <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf style_is-bold__N5VPL">e. Notice to Customers</p><br>
                       <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">We provide notice to customers that their transactions may be subject to AML/KYC checks. This information is stated in full detail in our <a href="https://<?php echo $site_name ?>.com/terms-of-use" target="_blank" rel="nofollow" id="" class="cl-link style_wrapper-link__BvHmd">Terms of Use</a>, and each customer is obliged to get acquainted with these Terms before initiating transactions.</p><br>
                       <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf style_is-bold__N5VPL">f. Reliance on Another Institution for Identity Verification</p><br>
                       <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">We may, under the following circumstances, rely on the performance of some or all of the elements of our CIP by an exchange, trading platform, crypto wallet (including an affiliate) with respect to any customer that is opening an account or has established an account or similar business relationship with the other company to provide or engage in services, dealings, or other financial transactions:</p><br>
                       <ul id="" class="cl-list style_wrapper-list__d_vdd">
                           <li class="style_wrapper-list-item__AnWCw cl-list__item style_is-regular-bullet__x_Bwu " data-starts-with="">
                               <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">when such reliance is reasonable under the circumstances; and</p>
                           </li>
                           <li class="style_wrapper-list-item__AnWCw cl-list__item style_is-regular-bullet__x_Bwu " data-starts-with="">
                               <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">when the other institution has entered into a contract with our company requiring it to certify annually to us that it has implemented its anti-money-laundering program and that it will fulfill (or its agent will fulfill) specified requirements of the customer identification program</p>
                           </li>
                       </ul><br>
                       <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf style_is-bold__N5VPL">g. Enhanced Due Diligence</p><br>
                       <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">We conduct Enhanced Due Diligence in connection will all customers or accounts that are determined as posing potential high risk and are determined to warrant enhanced scrutiny. We have established procedures to decline to do business with or discontinue relationships with any customer when we cannot adequately complete necessary Enhanced Due Diligence or when the information received is deemed to have a significant adverse impact on reputational risk. The following are the indicative list where the risk perception of a customer may be considered higher: (1) customers requesting an exchange of untraceable cryptocurrencies; (2) an ongoing investigation in regards to customers; (3) the trading activity appears to be from higher-risk countries; (4) virtual asset transfers above the threshold set by the FATF guidelines; (5) Politically Exposed Persons.</p><br>
                       <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">Enhanced Due Diligence may be in the nature of keeping the account monitored closely for the recategorization of risk, update of KYC documents, etc</p><br>
                       <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">Enhanced Due Diligence implies checking the source of funds. Among the proofs accepted for verification are the following: exchange accounts with the history of trading, receipts from cryptocurrency sellers, or proofs of mining activity.</p><br>
                       <h2 class="cl-heading style_heading__mFYLj style_color-gray__ys0OB style_size-md__IN3MI" style="zoom:1;text-align:center;margin-bottom:2rem">2. RECORDKEEPING</h2>
                       <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">We will document our verification, including all identifying information provided by a customer, the methods used and results of verification, and the resolution of any discrepancies identified in the verification process.</p><br>
                       <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">According to the documentation of Sum Substance, all User data obtained during the KYC procedure is encrypted and stored on GDPR-compliant Amazon servers, which are located in the EU. These are kept at Uptime Institute classified Tier III data centers compliant with TIA-942 and PCI DSS standards. The data centers are protected technically and guarded physically around the clock by specially audited security personnel.</p><br>
                       <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">For more information, please refer to <a href="https://new.help.sumsub.com/hc/en-us/articles/4405432270226-Sumsub-Compliance-and-Data-Protection-Policy" target="_blank" rel="nofollow" id="" class="cl-link style_wrapper-link__BvHmd">this page</a>.</p><br>
                       <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">We will retain records of all identification information for five years after the account has been closed; we will retain records made about verification of the customer’s identity for five years after the record is made.</p><br>
                       <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">The above-mentioned records can be made available to the competent authorities upon request.</p><br>
                       <h2 class="cl-heading style_heading__mFYLj style_color-gray__ys0OB style_size-md__IN3MI" style="zoom:1;text-align:center;margin-bottom:2rem">3. AML COMPLIANCE OFFICER</h2>
                       <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">The AML Compliance Officer is the person, duly authorized by <?php echo $site_name ?>, whose responsibility is to implement and effectively monitor the application and enforcement of the AML/KYC policy as outlined in this document. The AML Compliance Officer is obliged to oversee and conduct effective monitoring of all aspects of <?php echo $site_name ?>’s anti-money laundering and counter-terrorist financing. Any suspicious behavior or activities should be reported to the AML Compliance Officer.</p><br>
                       <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">Communication with the AML Compliance Officer in regards to this Policy is conducted via <a href="mailto:security@<?php echo $site_name ?>.com" target="" rel="" id="" class="cl-link style_wrapper-link__BvHmd">security@<?php echo $site_name ?>.com</a>.</p><br>
                       <h2 class="cl-heading style_heading__mFYLj style_color-gray__ys0OB style_size-md__IN3MI" style="zoom:1;text-align:center;margin-bottom:2rem">4. MONITORING OF TRANSACTIONS</h2>
                       <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">Ongoing monitoring is an essential element of effective KYC procedures. We have an understanding of the normal and reasonable activity of the customer, ensuring that we have the means of identifying transactions that fall outside the regular pattern of activity. However, the extent of monitoring will depend on the risk sensitivity of the account. High-risk accounts have to be subjected to intensified monitoring. In case of sudden swaps of big amounts, these accounts can be flagged by the risk scoring system as low, medium, or high risk</p><br>
                       <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">We have implemented a Know-Your-Transaction service that is the real-time anti-money-laundering compliance solution for monitoring cryptocurrency transactions. As a result of its targeted approach, it empowered our <?php echo $site_name ?> security team to significantly speed up the detection of transactions with fraudulent funds involved.</p><br>
                       <h2 class="cl-heading style_heading__mFYLj style_color-gray__ys0OB style_size-md__IN3MI" style="zoom:1;text-align:center;margin-bottom:2rem">5. RISK MANAGEMENT</h2>
                       <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">We have put in place appropriate procedures to ensure the effective implementation of KYC guidelines. The implementation procedure covers proper management oversight, systems and controls, segregation of duties, training, and other related matters. From time to time, the <?php echo $site_name ?> security team will carry on the necessary quality checks and file audits to ensure that the KYC policies and procedures are adhered to. From time to time, the <?php echo $site_name ?> security team shall update senior management about issues arising during the customer acquisition process.</p><br>
                       <h2 class="cl-heading style_heading__mFYLj style_color-gray__ys0OB style_size-md__IN3MI" style="zoom:1;text-align:center;margin-bottom:2rem">6. COLLABORATION WITH LAW ENFORCEMENT AGENCIES</h2>
                       <p class="cl-para style_wrapper-paragraph__ptRNI style_is-shaded__4LIyf">We obtain and hold required and accurate originator information and required beneficiary information on virtual asset transfers and make it available to appropriate authorities on official request</p><br>
                   </section>
               </div>
           </div>
       </div>
    </div>
  </div>
</div>
</section>
<script>
    var siteName = "";
    <?php
        echo "siteName = '".$site_name."';";

        ?>
    </script>
    <script src="scripts/Texts/textsTerms.js" type="text/javascript">
    </script>
    <script src="scripts/translate.js" type="text/javascript">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
