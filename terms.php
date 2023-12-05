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
                    <!-- <li  class="lng-faq hover-underline-animation">FAQ</li> -->
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
        <p class="lng-terms-title"></p>
      </div>
    </div>

    <div class="terms_body">
      <div class="layout_generic-root-wrapper-slim__3lQfI">
                    <div class="style_intro__323bM">
                        <p class="cl-para style_wrapper-paragraph__Qbgha p5 text-bold">Last Updated: April,
                            2022<br>These Terms of Use and any terms incorporated herein (hereinafter, the “Terms”)
                            apply to your (“user”, “you“) use of the Services, including https://<?php echo $site_name; ?>.com/
                            (“Website“), the technology and the platform integrated therein and any related applications
                            (including without limitation the mobile one) associated therewith, which are operated and
                            maintained by Fintechvision Ltd. and its affiliates (“<?php echo $site_name; ?>”, “We”, or “Us”).<br><br>We
                            provide you with the possibility to use our Services as defined above on the following terms
                            and conditions.</p>
                    </div>
                    <div>
                        <h2 class="cl-heading style_heading__2L6sr style_color-gray__21bwd style_size-md__KBe3R"
                            style="zoom:1;text-align:left;margin-bottom:2rem">1.
                            <!-- -->Enforcement &amp; Amendments
                        </h2>
                        <ol id="" class="cl-list style_wrapper-list__3MWDD">
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="1.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">These Terms of
                                    Use constitutes a binding agreement between <?php echo $site_name; ?> and the user as soon as the
                                    user visits the Website and uses Services. By doing so, the user confirms that he
                                    has read and accepted these Terms of Use in their entirety before finishing the
                                    registration procedure.</p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="1.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">The user
                                    accepts that Terms of Use may be updated by <?php echo $site_name; ?> from time to time. If the user
                                    does not read and accept the Terms of Use in its entirety he should not use or
                                    continue using the Services.</p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="1.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">We reserve the
                                    right to alter, amend or modify these Terms from time to time, in our sole
                                    discretion. We will provide you with notice of such changes by sending an e-mail,
                                    providing notice on the homepage of the Website and/or by posting the amended Terms
                                    via our Website and updating the "Last Updated" date at the top of these Terms. The
                                    amended Terms will be deemed effective immediately upon posting on Website.</p>
                            </li>
                        </ol>
                        <h2 class="cl-heading style_heading__2L6sr style_color-gray__21bwd style_size-md__KBe3R"
                            style="zoom:1;text-align:left;margin-bottom:2rem">2.
                            <!-- -->Provided Services
                        </h2>
                        <ol id="" class="cl-list style_wrapper-list__3MWDD">
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="2.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">Our Services
                                    provide you with a possibility to Exchange one type of crypto asset to another one
                                    and access to Marketplace.</p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="2.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">
                                <div>For the purposes hereof <b>"Exchange"</b> shall mean an exchange of the crypto
                                    asset of one type to the crypto asset of another type at the terms and conditions
                                    set forth by exchanging parties, which is executed via the Third-party service in
                                    respective block-chain network. When you exchange crypto assets you acknowledge and
                                    agree that the Exchange will be processed through the third-party exchange service
                                    with additional fees applicable to such Exchange. You acknowledge and agree that the
                                    exchange rates information made available via the Services are an estimation only
                                    and may differ from prevailing rates available via other sources outside of our
                                    Services.</div>
                                </p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="2.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">
                                <div><b>"Crypto Assets"</b> herein shall be deemed as type of assets which can only and
                                    exclusively be transmitted by means of block-chain technology, including but not
                                    limited to digital coins and digital tokens and any other type of digital mediums of
                                    exchange, such as Bitcoin, Ethereum, Ripple, etc, to the full and absolute exempt of
                                    the securities of any kind.</div>
                                </p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="2.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">
                                <div>“Marketplace” herein shall mean an online digital aggregation platform for fiat
                                    providers with an option to compare current rates and limits for buying or selling
                                    crypto assets.</div>
                                </p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="2.">
                                <section>
                                    <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">
                                    <div>To be able to use all possibilities and functionality of our Services you shall
                                        go through the registration process and create a <?php echo $site_name; ?> Account.
                                        <b>"<?php echo $site_name; ?> Account"</b> is a user account accessible after the registration
                                        process and via the Services where the user may request to make a crypto assets
                                        exchange. User should manage and maintain only one <?php echo $site_name; ?> Account. Users are
                                        prohibited from creating multiple accounts. When you create a <?php echo $site_name; ?> Account
                                        you oblige to:</div>
                                    </p>
                                    <ol id="" class="cl-list style_wrapper-list__3MWDD">
                                        <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                            data-starts-with="2.">
                                            <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">
                                                change the password, which is generated by our Services automatically,
                                                for a strong password that you do not use for any other websites, online
                                                or off-line services;</p>
                                        </li>
                                        <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                            data-starts-with="2.">
                                            <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">
                                                provide accurate e-mail, which actually belongs to you and shall be,
                                                therefore, verified. The access to the services provided by the
                                                <?php echo $site_name; ?> without verification of the e-mail is not allowed;</p>
                                        </li>
                                        <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                            data-starts-with="2.">
                                            <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">
                                                maintain the security of your <?php echo $site_name; ?> Account and promptly notify us
                                                if you discover any suspicious activity related to your account;</p>
                                        </li>
                                        <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                            data-starts-with="2.">
                                            <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">
                                                agree to receive emails containing information about credentials,
                                                passwords, transactions and marketing promotions;</p>
                                        </li>
                                        <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                            data-starts-with="2.">
                                            <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">
                                                agree to pass through AML/KYC procedures, which may be applied to You
                                                according to our internal AML/KYC policies. As a part of such
                                                procedures, <?php echo $site_name; ?> reserves the right to request additional
                                                information and documents, which are aimed without limitation to
                                                identify our user and to prove the source of the funds;</p>
                                        </li>
                                        <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                            data-starts-with="2.">
                                            <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">
                                                take responsibility for all activities that occur under your <?php echo $site_name; ?>
                                                Account.</p>
                                        </li>
                                    </ol>
                                </section>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="2.">
                                <section>
                                    <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">
                                    <div>The <b>"Floating exchange rate"</b> option herein shall mean an exchange rate
                                        mode in which our platform does not guarantee the rate - so it fluctuates in
                                        accordance with the market. You acknowledge and agree that the exchange rate
                                        information made available via Services for the Floating exchange rate option is
                                        an estimation only and may differ from the actual rates available via other
                                        sources outside of our Services. <?php echo $site_name; ?> cannot guarantee the execution of a
                                        Floating exchange rate transaction in some cases, including, but not limited to
                                        the following ones:</div>
                                    </p>
                                    <ol id="" class="cl-list style_wrapper-list__3MWDD">
                                        <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                            data-starts-with="2.">
                                            <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">
                                                user sent crypto assets to a previously used one-time address that had
                                                been generated for a Floating exchange rate transaction;</p>
                                        </li>
                                        <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                            data-starts-with="2.">
                                            <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">
                                                user sent an amount of crypto assets different from the amount to be
                                                sent that was displayed on the Website, or did not account for the
                                                relevant withdrawal and network fees, thus sending an amount that is too
                                                small;</p>
                                        </li>
                                        <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                            data-starts-with="2.">
                                            <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">the
                                                user sent crypto assets to a <?php echo $site_name; ?> floating-rate address later than
                                                in 3 hours after the address was provided. <?php echo $site_name; ?> floating rate
                                                addresses cannot be used after the 3 hour mark.</p>
                                        </li>
                                        <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                            data-starts-with="2.">
                                            <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">in
                                                order to avoid any substantial losses for the customer caused by the
                                                rate change, when a significant disparity between an estimated exchange
                                                rate available on the Website and the rate received from a third-party
                                                exchange arises, a Floating exchange rate transaction may be failed
                                                automatically.</p>
                                        </li>
                                    </ol>
                                    <p></p>
                                    <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">
                                    <div>If despite the aforementioned cases the market situation allows us to make the
                                        exchange, the transaction will be exchanged manually at the new rate.<br> If the
                                        market situation is such that the transaction cannot be executed anymore, or if
                                        the rate has changed significantly and the user asks for a refund, the crypto
                                        assets that the user wants to exchange will be refunded, if at all possible,
                                        less all applicable fees. The refund usually takes 1-7 business days (depending
                                        on the reason of the failure) after the users confirms their refund address.
                                    </div>
                                    </p>
                                </section>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="2.">
                                <section>
                                    <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">
                                    <div>When using the <b>"Fixed exchange rate"</b> option, your rate gets "locked" for
                                        fifteen or twenty minutes, meaning it remains the same irrespective of the
                                        changes on the market. You acknowledge and agree that for the Fixed exchange
                                        rate option the exchange rate information available on the Website may be
                                        different from the exchange rates for the Floating exchange rate option.
                                        <?php echo $site_name; ?> cannot guarantee the execution of a Fixed exchange rate transaction in
                                        some cases, including, but not limited to the following ones:</div>
                                    </p>
                                    <ol id="" class="cl-list style_wrapper-list__3MWDD">
                                        <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                            data-starts-with="2.">
                                            <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">
                                                user sent crypto assets more than 15 minutes (20 minutes in case of BTC,
                                                XMR, LTC, DCR, EOS, GAS, BNB, VET) after clicking the “confirm &amp;
                                                make payment” button when exchanging via the Fixed exchange rate option;
                                            </p>
                                        </li>
                                        <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                            data-starts-with="2.">
                                            <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">
                                                user sent an amount of crypto assets different from the amount to be
                                                sent that was displayed on the Website, or did not account for the
                                                relevant withdrawal and network fees, thus sending an amount that is too
                                                small;</p>
                                        </li>
                                        <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                            data-starts-with="2.">
                                            <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">
                                                user sent crypto assets to a previously used one-time address that had
                                                been generated for a Fixed exchange rate transaction.</p>
                                        </li>
                                    </ol>
                                    <p></p>
                                    <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">
                                    <div>If the market situation allows us to make the exchange, the transaction will be
                                        pushed through manually at the rate that was confirmed by the customer at the
                                        beginning of the exchange. <br>If the market situation is such that the
                                        transaction cannot be executed anymore, the crypto assets that the user wants to
                                        exchange will be refunded, if at all possible, less all applicable fees (
                                        applicable only to 2.7.1 and 2.7.2 cases). <br><?php echo $site_name; ?> will be able to return
                                        the crypto assets to the user. The crypto assets will be sent manually from an
                                        exchange market we work with, less all applicable fees. A refund in such case
                                        usually takes up to 20 business days (applicable only to 2.7.3 case).</div>
                                    </p>
                                </section>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="2.">
                                <section>
                                    <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">In order to
                                        perform the Exchange via our Services, our system will automatically generate a
                                        particular address for the initiated transaction, which contains information
                                        about (i) the user; (ii) the crypto asset that user wants to exchange and the
                                        crypto asset that user wants to receive (jointly - "crypto pair"); and (iii) the
                                        recipient address provided by the user (the address where exchanged crypto
                                        assets will be deposited). The user understands that the crypto assets to be
                                        exchanged are transferred only to the particular address provided by the system.
                                        The address is active only for one transaction and particularly, the one
                                        designated by the system.</p>
                                </section>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="2.">
                                <section>
                                    <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">The
                                        technical issues arising from your misuse of our services, such as creating
                                        incorrect transactions (entering a wrong address both when indicating the
                                        recipient address and when sending your crypto assets to us), and other types of
                                        user mistakes may be resolved by our technical department with limitations. Upon
                                        successful resolution of a technical issue, the crypto assets sent incorrectly
                                        will be refunded to the user, less all applicable fees.</p>
                                    <ol id="" class="cl-list style_wrapper-list__3MWDD">
                                        <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                            data-starts-with="2.">
                                            <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">
                                                <?php echo $site_name; ?> technical department is able to refund only BTC from the
                                                Segwit BTC address. No other crypto assets, including but not limited
                                                to, LTC, BSV, BCH sent to a Segwit BTC address could be refunded;</p>
                                        </li>
                                        <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                            data-starts-with="2.">
                                            <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">No
                                                crypto assets sent to us via an unsupported and/or not recommended
                                                network (e.g. BSC network) can be refunded. Recommended networks will be
                                                displayed to you during the transaction process.</p>
                                        </li>
                                    </ol>
                                </section>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="2.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">You acknowledge
                                    and agree that any refund may cause operating costs for the allocated resources
                                    required for resolving user issues arising from misuse of our services. <?php echo $site_name; ?>
                                    shall be entitled to recover its operating costs for the services while executing
                                    any refund. In this case crypto assets will be refunded to the user, subtracting
                                    operating costs and network fees, only with a prior user’s consent.</p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="2.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">YOU INDEMNIFY
                                    AND HOLD <?php echo $site_name; ?> HARMLESS AGAINST ANY DIRECT, INDIRECT, CONSEQUENTIAL OR SPECIAL
                                    DAMAGES, OR ANY OTHER DAMAGES OF ANY KIND, INCLUDING, BUT NOT LIMITED TO, LOSS OF
                                    USE, LOSS OF PROFITS OR LOSS OF DATA, WHETHER IN AN ACTION IN CONTRACT, TORT
                                    (INCLUDING BUT NOT LIMITED TO NEGLIGENCE) OR OTHERWISE, ARISING OUT OF OR IN ANY WAY
                                    CONNECTED WITH YOUR USE OF OUR SERVICES, INCLUDING BUT NOT LIMITED TO INCORRECT USE
                                    OF ADDRESS, INCORRECTLY CONSTRUCTED TRANSACTIONS ETC.</p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="2.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp"><?php echo $site_name; ?> does
                                    not provide custodial services, which means, we do not store your crypto assets on
                                    deposits and balances. In limited cases such as e.g. necessity to carry out AML/KYC
                                    procedure, your Exchange may be delayed. YOU HEREBY UNDERSTAND AND ACKNOWLEDGE, THAT
                                    ANY DELAYS ARE POSSIBLE; YOU INDEMNIFY AND HOLD US HARMLESS AGAINST ANY CLAIMS,
                                    DEMANDS AND DAMAGES, WHETHER DIRECT, INDIRECT, CONSEQUENTIAL OR SPECIAL, OR ANY
                                    OTHER DAMAGES OF ANY KIND, INCLUDING, BUT NOT LIMITED TO, LOSS OF USE, LOSS OF
                                    PROFITS OR LOSS OF DATA, WHETHER IN AN ACTION IN CONTRACT, TORT (INCLUDING BUT NOT
                                    LIMITED TO NEGLIGENCE) OR OTHERWISE, ARISING OUT OF OR IN ANY WAY CONNECTED WITH THE
                                    EXCHANGE DELAY, WHETHER ORIGINATED FROM OUR FAULT OR NOT.</p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="2.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp"><?php echo $site_name; ?> is
                                    neither the creator, nor the administrator of any fiat provider at Marketplace.
                                    Therefore <?php echo $site_name; ?> is not responsible for providing, setting or controlling the
                                    fees applicable to any of the services or products which you find and use via our
                                    Marketplace. It merely acts as an aggregator landing platform for the various fiat
                                    providers integrating APIs of those providers. All fiat trading capabilities and
                                    services take place in accordance with and are subject to the policies and terms of
                                    use of the said fiat provider.</p>
                            </li>
                        </ol>
                        <h2 class="cl-heading style_heading__2L6sr style_color-gray__21bwd style_size-md__KBe3R"
                            style="zoom:1;text-align:left;margin-bottom:2rem">3.
                            <!-- -->Fees
                        </h2>
                        <ol id="" class="cl-list style_wrapper-list__3MWDD">
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD"
                                data-starts-with="3.">
                                <section>
                                    <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp"><?php echo $site_name; ?>
                                        keeps its fee policy transparent. The current fee structure is two-layered and
                                        is comprised of exchange and network fees.</p>
                                    <ol id="" class="cl-list style_wrapper-list__3MWDD">
                                        <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                            data-starts-with="3.">
                                            <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">The
                                                exchange fee is the amount charged by <?php echo $site_name; ?> for executing
                                                transactions initiated by the users. The exchange fee structure depends
                                                on the transaction type: the Floating exchange rate or the Fixed one.
                                                The Floating exchange rate transactions incur a 0.25% fee from the
                                                output amount (it differs for transactions executed through our API
                                                partners). As with regard to the Fixed exchange rate transactions,
                                                <?php echo $site_name; ?> finds the best rate available on the market and fixes it for
                                                the conversion in question; the respective rate is displayed to the
                                                user, thus guaranteeing the protection of users’ funds from market
                                                fluctuations during the exchange.</p>
                                        </li>
                                        <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                            data-starts-with="3.">
                                            <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">The
                                                network fee is paid to cryptocurrency miners for processing transactions
                                                in the network, and it serves to ensure withdrawals of the funds from
                                                exchanges. <?php echo $site_name; ?> collects and transfers these payments to respective
                                                exchanges, which themselves set the amount of the fee at any particular
                                                time. The moment a transaction is created, this fee is displayed to the
                                                user, with the amount being based on our estimates. With that, you
                                                acknowledge and agree that the final amount of the network fee charged
                                                can sometimes differ from our estimate. This occurs entirely due to the
                                                volatile nature of network fees prevalent on exchanges and does not
                                                depend on our platform in any respect.</p>
                                        </li>
                                    </ol>
                                </section>
                            </li>
                        </ol>
                        <h2 class="cl-heading style_heading__2L6sr style_color-gray__21bwd style_size-md__KBe3R"
                            style="zoom:1;text-align:left;margin-bottom:2rem">4.
                            <!-- -->AML and KYC Procedure
                        </h2>
                        <ol id="" class="cl-list style_wrapper-list__3MWDD">
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="4.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">In furtherance
                                    of the clause 2.5.5 <?php echo $site_name; ?> reserves the right to apply the AML/KYC procedure to
                                    particular users, addresses and particular transactions of crypto assets.</p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="4.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">
                                <div>The up-to-date information on the AML/KYC procedures can always be found at <a
                                        href="https://<?php echo $site_name; ?>.com/aml-kyc" target="_blank">AML/KYC.</a></div>
                                </p>
                            </li>
                        </ol>
                        <h2 class="cl-heading style_heading__2L6sr style_color-gray__21bwd style_size-md__KBe3R"
                            style="zoom:1;text-align:left;margin-bottom:2rem">5.
                            <!-- -->Eligibility
                        </h2>
                        <ol id="" class="cl-list style_wrapper-list__3MWDD">
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="5.">
                                <section>
                                    <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">Prior to
                                        your use of the Services and on an ongoing basis you represent, warrant,
                                        covenant and agree that:</p>
                                    <ol id="" class="cl-list style_wrapper-list__3MWDD">
                                        <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                            data-starts-with="5.">
                                            <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">you
                                                use our Services at your sole option, discretion and risk;</p>
                                        </li>
                                        <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                            data-starts-with="5.">
                                            <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">you
                                                are solely responsible for any applicable taxes which may be payable
                                                while using our Services;</p>
                                        </li>
                                        <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                            data-starts-with="5.">
                                            <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">you
                                                are NOT in, under the control of, or a national or resident of any
                                                country where crypto assets transactions are explicitly prohibited or
                                                United States of America (including all USA territories like Puerto
                                                Rico, American Samoa, Guam, Northern Mariana Island, and the US Virgin
                                                Islands (St. Croix, St. John and St. Thomas) (“Restricted Locations”).
                                                <?php echo $site_name; ?> does not operate in Restricted Locations. <?php echo $site_name; ?> maintains
                                                the right to select the markets and jurisdictions to operate in and may
                                                restrict or deny its services to certain countries at any time;</p>
                                        </li>
                                        <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                            data-starts-with="5.">
                                            <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">you
                                                are at least 16 years old or of other legal age, according to your
                                                relevant jurisdiction;</p>
                                        </li>
                                        <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                            data-starts-with="5.">
                                            <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">you
                                                agree to pay the fees for Exchanges completed via Services as defined by
                                                <?php echo $site_name; ?>, which We may change from time to time; you also understand
                                                and acknowledge that network withdrawal fees are applicable to any types
                                                of withdrawals requested by you, the third party authorized by you, or
                                                under the request of a competent authority;</p>
                                        </li>
                                        <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                            data-starts-with="5.">
                                            <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">
                                                there are risks, associated with Internet-based system, such as the
                                                failure of hardware, software, and Internet connections and with the
                                                Blockchain Protocol, such as any malfunction, unintended function,
                                                unexpected functioning of or attack on the Blockchain protocol;</p>
                                        </li>
                                        <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                            data-starts-with="5.">
                                            <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">you
                                                guarantee that your crypto assets belong to you and they are not sold,
                                                encumbered, not in contention, or under seizure, and that neither exist
                                                any rights of third parties to your crypto assets;</p>
                                        </li>
                                        <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                            data-starts-with="5.">
                                            <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">you
                                                shall provide correct information for constructing Exchange (e.g. payin
                                                and payout wallet address). Such wallet addresses shall not be
                                                associated with terrorism, fraudulent, scam or any type of illegal
                                                activity.</p>
                                        </li>
                                    </ol>
                                </section>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="5.">
                                <section>
                                    <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">You further
                                        represent, agree and warrant, that you will not violate any law, contract,
                                        third-party right or commit a tort by accessing or using the Services, and that
                                        you are solely responsible for your actions and/or inactions while using our
                                        Services. Without prejudice to the foregoing, you represent, agree and warrant,
                                        that YOU WILL NOT:</p>
                                    <ol id="" class="cl-list style_wrapper-list__3MWDD">
                                        <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                            data-starts-with="5.">
                                            <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">use
                                                our Services or will immediately cease using those if any applicable law
                                                in your country prohibits or will prohibit you at any time from doing
                                                so;</p>
                                        </li>
                                        <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                            data-starts-with="5.">
                                            <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">use
                                                our Services to participate in fraudulent, scam or any type of illegal
                                                activity;</p>
                                        </li>
                                        <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                            data-starts-with="5.">
                                            <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">
                                                exchange via our Services or attempt to pay-in crypto assets, which are
                                                obtained from illegal gambling activities; fraud; money-laundering; or
                                                terrorist activities; or any other illegal activities. With our Services
                                                the user can only use crypto assets, which are obtained from legal
                                                sources;</p>
                                        </li>
                                        <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                            data-starts-with="5.">
                                            <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">
                                                provide false, inaccurate, or misleading information;</p>
                                        </li>
                                        <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                            data-starts-with="5.">
                                            <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">
                                                attempt to modify, decompile, reverse-engineer or disassemble our
                                                software in any way;</p>
                                        </li>
                                        <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                            data-starts-with="5.">
                                            <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">use
                                                any robot, spider, crawler, scraper or other automated means or
                                                interface not provided by us to access the Services or to extract data;
                                            </p>
                                        </li>
                                        <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                            data-starts-with="5.">
                                            <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">
                                                attempt to circumvent any content filtering techniques we employ, or
                                                attempt to access any service or area of our Services that you are not
                                                authorized to access;</p>
                                        </li>
                                        <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                            data-starts-with="5.">
                                            <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">
                                                develop any third-party applications that interact with our Services
                                                without our prior written consent; AND</p>
                                        </li>
                                        <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                            data-starts-with="5.">
                                            <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">
                                                Encourage or induce any third party to engage in any of the activities
                                                prohibited under this Section.</p>
                                        </li>
                                    </ol>
                                </section>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="5.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">YOU INDEMNIFY
                                    AND HOLD US HARMLESS AGAINST ANY CLAIMS, DEMANDS AND DAMAGES, WHETHER DIRECT,
                                    INDIRECT, CONSEQUENTIAL OR SPECIAL, OR ANY OTHER DAMAGES OF ANY KIND, INCLUDING, BUT
                                    NOT LIMITED TO, LOSS OF USE, LOSS OF PROFITS OR LOSS OF DATA OR LOSS OF ASSETS,
                                    WHETHER IN AN ACTION IN CONTRACT, TORT (INCLUDING BUT NOT LIMITED TO NEGLIGENCE) OR
                                    OTHERWISE, ORIGINATED FROM OR IN ANY WAY CONNECTED WITH INVALIDITY OR BREACH OF ANY
                                    OF THE PROVISIONS OF THIS SECTION AND THE ENTIRE TERMS.</p>
                            </li>
                        </ol>
                        <h2 class="cl-heading style_heading__2L6sr style_color-gray__21bwd style_size-md__KBe3R"
                            style="zoom:1;text-align:left;margin-bottom:2rem">6.
                            <!-- -->Information Privacy
                        </h2>
                        <ol id="" class="cl-list style_wrapper-list__3MWDD">
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="6.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">Never share the
                                    details of your transaction, including, but not limited to, your <?php echo $site_name; ?> ID, the
                                    transaction hash, recipient address and/or e-mail related to a <?php echo $site_name; ?> account,
                                    with anyone except <?php echo $site_name; ?> representatives. <?php echo $site_name; ?> will not request specific
                                    information about user accounts, transactions or other personally identifiable data
                                    from you unless: (i) the information is requested to help complete a transaction
                                    initiated by you; (ii)the information is requested to efficiently process your
                                    enquiry; or (iii) it is legally required e.g. in connection with the AML/KYC
                                    procedure.</p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="6.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">You should
                                    ascertain that your transactions and/or account details are not disclosed by
                                    ensuring that you do not knowingly or accidentally share, provide or facilitate
                                    unauthorized use of it.</p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="6.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">WITHOUT
                                    LIMITING THE FOREGOING, <?php echo $site_name; ?> SHALL NOT BE LIABLE FOR ANY LOSSES OR DAMAGES
                                    INCURRED AS A RESULT OF ANY INFORMATION SUBMITTED TO IT THROUGH THIS WEBSITE OR ANY
                                    CONTACT E-MAIL THEREOF OR FOR ITS TRANSMISSION OF INFORMATION TO ANY PERSON(S) OR
                                    ENTITY(IES) AS A RESULT OF A REQUEST FOR SUCH TRANSMISSION REASONABLY BELIEVED BY
                                    <?php echo $site_name; ?> TO HAVE BEEN MADE BY SUCH PERSON OR ENTITY.</p>
                            </li>
                        </ol>
                        <h2 class="cl-heading style_heading__2L6sr style_color-gray__21bwd style_size-md__KBe3R"
                            style="zoom:1;text-align:left;margin-bottom:2rem">7.
                            <!-- -->Risk Disclosure
                        </h2>
                        <ol id="" class="cl-list style_wrapper-list__3MWDD">
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="7.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp"><?php echo $site_name; ?> does
                                    not and will not provide any investment advice or legal advice regarding your
                                    exchange. You acknowledge that only you are responsible for your decisions and
                                    actions performed on our platform and we will not make any personal recommendations
                                    for or advise you on the exchange of particular crypto assets. Before performing any
                                    exchange of crypto assets, you should carefully consider whether such an exchange is
                                    suitable for you with your current circumstances and financial resources.</p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="7.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">Be aware that
                                    crypto assets are generally assumed to be subject to high volatility due to them
                                    still being in the early stages of developing, technologically and financially.
                                    Crypto assets do not necessarily have a specific form of protection or regulation by
                                    any governmental body, which means that by exchanging crypto assets, you will not be
                                    able to enforce any guarantees or safeguards expected with regulated financial
                                    services.</p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="7.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">THE RISK OF
                                    LOSS IN THE EXCHANGE OF CRYPTO ASSETS CAN BE SUBSTANTIAL, AND THEREFORE YOU SHOULD
                                    UNDERSTAND THE POSSIBILITY OF LOSSES ASSOCIATED WITH THE EXCHANGE OF CRYPTO ASSETS
                                    AND MUST ASSUME RESPONSIBILITY FOR ALL THE RISKS ASSOCIATED WITH SUCH EXCHANGES AND
                                    FOR THEIR RESULTS.</p>
                            </li>
                        </ol>
                        <h2 class="cl-heading style_heading__2L6sr style_color-gray__21bwd style_size-md__KBe3R"
                            style="zoom:1;text-align:left;margin-bottom:2rem">8.
                            <!-- -->Third-Party Content and Services
                        </h2>
                        <ol id="" class="cl-list style_wrapper-list__3MWDD">
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="8.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">
                                <div>For the purposes hereof <b>"Third-Party Content"</b> shall mean the content
                                    provided by third parties, including without limitation links to web pages of such
                                    parties, which may be represented on the Website and other Services. At the same
                                    time <b>"Third-party service"</b> refers to any platform or network in which crypto
                                    assets belong to you or where you are the beneficial owner of crypto assets; or any
                                    website or platform which we redirect you to; and this platform or website is
                                    maintained by a third party outside of the Services, including, but not limited to
                                    third-party accounts.</div>
                                </p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="8.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">
                                <div><b>Price accuracy.</b> Although we enforce strict price accuracy policies for all
                                    fiat providers and do our best to ensure that the content displayed on or via our
                                    Marketplace is up-to-date and accurate, we cannot guarantee the reliability or
                                    accuracy of such content.</div>
                                </p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="8.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">
                                <div><b>No control over third-party services.</b> If you encounter any problems with any
                                    Third-Party Services available via <?php echo $site_name; ?>, you acknowledge that you should
                                    resolve that issue with the relevant third-party or fiat provider and that your sole
                                    remedy in such circumstances lies within the relevant third-party and not within
                                    <?php echo $site_name; ?>.</div>
                                </p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="8.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">You may be
                                    charged fees by the third-party service provider. <?php echo $site_name; ?> is not responsible for
                                    any third-party services' fees. You are solely responsible for your use of the
                                    third-party service, and you agree to comply with all terms and conditions
                                    applicable to any third-party service.</p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="8.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">The exchange
                                    rates discrepancy is at any time possible due to the Third-Party algorithms. YOU
                                    INDEMNIFY AND HOLD <?php echo $site_name; ?> HARMLESS AGAINST ANY DIRECT, INDIRECT, CONSEQUENTIAL OR
                                    SPECIAL DAMAGES, OR ANY OTHER DAMAGES OF ANY KIND, INCLUDING, BUT NOT LIMITED TO,
                                    LOSS OF USE, LOSS OF PROFITS OR LOSS OF DATA, WHETHER IN AN ACTION IN CONTRACT, TORT
                                    (INCLUDING BUT NOT LIMITED TO NEGLIGENCE) OR OTHERWISE, ARISING OUT OF OR IN ANY WAY
                                    CONNECTED WITH THE AFORESAID EXCHANGE RATES DISCREPANCY WHICH IS BELOW 10 USD.</p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="8.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">While using our
                                    Services, you may view Third-Party Content. We do not control, endorse or adopt
                                    (unless otherwise expressly stated by Us) any Third-Party Content and shall have no
                                    responsibility for Third-Party Content, including without limitation material that
                                    may be misleading, incomplete, erroneous, offensive, indecent or otherwise
                                    objectionable. In addition, your business dealings or correspondence with such third
                                    parties are solely between you and the third parties. We are not responsible or
                                    liable for any loss or damage of any sort incurred as the result of any such
                                    dealings, and you understand that your use of Third-Party Content, and your
                                    interactions with third parties, is at your own risk.</p>
                            </li>
                        </ol>
                        <h2 class="cl-heading style_heading__2L6sr style_color-gray__21bwd style_size-md__KBe3R"
                            style="zoom:1;text-align:left;margin-bottom:2rem">9.
                            <!-- -->Intellectual Property
                        </h2>
                        <ol id="" class="cl-list style_wrapper-list__3MWDD">
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="9.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">All our
                                    intellectual property assets ("IP") including but not limited to all copyrights,
                                    trademarks, patents, service marks, trade names, software code, icons, logos,
                                    characters, layouts, trade secrets, buttons, color scheme and graphics are protected
                                    by local and international intellectual property laws and treaties.</p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="9.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">We hereby grant
                                    you a limited, nonexclusive and non-sublicensable license to access and use our IP
                                    for your personal use only.</p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="9.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">In any case you
                                    may not alter, modify, reproduce, distribute or commercially exploit any materials,
                                    including text, graphics, video, audio, software code, user interface design or
                                    logos.</p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="9.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">The license
                                    granted under this Section will automatically terminate if We suspend or terminate
                                    your access to the Services</p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="9.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">
                                <div>In case you upload or share any feedback, suggestion, idea or other information or
                                    material (<b>"Content"</b>) with us you automatically grant us a worldwide license
                                    to use your content. It becomes part of the public domain as long as it remains on
                                    our Website and Services. It can be used for marketing or any other purposes at our
                                    sole discretion.</div>
                                </p>
                            </li>
                        </ol>
                        <h2 class="cl-heading style_heading__2L6sr style_color-gray__21bwd style_size-md__KBe3R"
                            style="zoom:1;text-align:left;margin-bottom:2rem">10.
                            <!-- -->Communications
                        </h2>
                        <ol id="" class="cl-list style_wrapper-list__3MWDD">
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD"
                                data-starts-with="10.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">
                                <div>You agree and consent to receive electronically all Communications, that <?php echo $site_name; ?>
                                    may be willing to communicate to you in connection with your <?php echo $site_name; ?> Account
                                    and/or use of our Services. For the purposes hereof <b>“Communications”</b> shall
                                    mean all and any communication, agreement, document, receipt, notice and disclosure,
                                    which may be from time to time addressed to user by <?php echo $site_name; ?>. You may withdraw your
                                    consent to receive electronic Communications by sending a withdrawal notice to
                                    support. If this is a case you waive your right to plead ignorance. If you decline
                                    or withdraw consent to receive electronic Communications, <?php echo $site_name; ?> may suspend or
                                    terminate your use of the Services.</div>
                                </p>
                            </li>
                        </ol>
                        <h2 class="cl-heading style_heading__2L6sr style_color-gray__21bwd style_size-md__KBe3R"
                            style="zoom:1;text-align:left;margin-bottom:2rem">11.
                            <!-- -->Limitation of Liabilities
                        </h2>
                        <ol id="" class="cl-list style_wrapper-list__3MWDD">
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="11.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">Except as
                                    expressly provided to the contrary in a writing by Us, our Services are provided on
                                    an "As is" and "As available" basis. WE EXPRESSLY DISCLAIM, AND YOU WAIVE, ALL
                                    WARRANTIES OF ANY KIND, WHETHER EXPRESS OR IMPLIED, INCLUDING, WITHOUT LIMITATION,
                                    IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, TITLE AND
                                    NON-INFRINGEMENT AS TO OUR SERVICES, INCLUDING THE INFORMATION, CONTENT AND
                                    MATERIALS CONTAINED THEREIN.</p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="11.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">Except as
                                    otherwise required by law, IN NO EVENT SHALL <?php echo $site_name; ?>, OUR DIRECTORS, OFFICERS,
                                    MEMBERS, EMPLOYEES OR AGENTS BE LIABLE FOR ANY DIRECT, INDIRECT, CONSEQUENTIAL OR
                                    SPECIAL DAMAGES, OR ANY OTHER DAMAGES OF ANY KIND, INCLUDING, BUT NOT LIMITED TO,
                                    LOSS OF USE, LOSS OF PROFITS OR LOSS OF DATA, WHETHER IN AN ACTION IN CONTRACT, TORT
                                    (INCLUDING BUT NOT LIMITED TO NEGLIGENCE) OR OTHERWISE, ARISING OUT OF OR IN ANY WAY
                                    CONNECTED WITH THE USE OF OR INABILITY TO USE OUR SERVICES, INCLUDING WITHOUT
                                    LIMITATION ANY DAMAGES CAUSED BY OR RESULTING FROM RELIANCE BY ANY USER ON ANY
                                    INFORMATION OBTAINED FROM <?php echo $site_name; ?>, OR THAT RESULT FROM MISTAKES, OMISSIONS,
                                    INTERRUPTIONS, DELETION OF FILES OR EMAIL, ERRORS, DEFECTS, VIRUSES, DELAYS IN
                                    OPERATION OR TRANSMISSION OR ANY FAILURE OF PERFORMANCE, WHETHER OR NOT RESULTING
                                    FROM A FORCE MAJEURE EVENT, COMMUNICATIONS FAILURE, THEFT, DESTRUCTION OR
                                    UNAUTHORIZED ACCESS TO <?php echo $site_name; ?>'S RECORDS, PROGRAMS OR SERVICES.</p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="11.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">Exchanges via
                                    our Services cannot be canceled by <?php echo $site_name; ?>. Therefore, check the details of your
                                    exchange details before making such exchange. <?php echo $site_name; ?> is not responsible for your
                                    crypto assets once they have been sent outside of the Services. Moreover, <?php echo $site_name; ?>
                                    doesn’t guarantee the uptime of the exchange.</p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="11.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">To the maximum
                                    extent permitted by applicable law, IN NO EVENT SHALL THE AGGREGATE LIABILITY OF
                                    <?php echo $site_name; ?> (INCLUDING OUR DIRECTORS, OFFICERS, MEMBERS, EMPLOYEES AND AGENTS),
                                    WHETHER IN CONTRACT, WARRANTY, TORT (INCLUDING NEGLIGENCE, WHETHER ACTIVE, PASSIVE
                                    OR IMPUTED), PRODUCT LIABILITY, STRICT LIABILITY OR OTHER THEORY, ARISING OUT OF OR
                                    RELATING TO THE USE OF, OR INABILITY TO USE, <?php echo $site_name; ?> OR TO THESE TERMS EXCEED THE
                                    FEES PAID BY YOU TO <?php echo $site_name; ?> WITHIN 3 MONTHS IMMEDIATELY PRECEDING THE DATE OF ANY
                                    CLAIM GIVING RISE TO SUCH LIABILITY.</p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="11.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">We strive to
                                    protect our users from fraudulent and scam activities in the sphere of crypto
                                    assets. It is possible, that some crypto assets are purposed for unlawful seizure of
                                    the property, or are construed as a fraud, scam or any other activity, recognized by
                                    the laws as illegal and/or non-compliant with legal requirements. <?php echo $site_name; ?>
                                    cooperates with law enforcements agencies and other competent authorities in order
                                    to determine and disclose such crypto assets. We reserve the right to prohibit and
                                    discontinue any Exchanges via our Services with such crypto asset at our sole
                                    discretion, without any prior notice to you and without publication of the reason
                                    for such decision, whenever this comes to our knowledge. YOU INDEMNIFY AND HOLD
                                    <?php echo $site_name; ?> HARMLESS AGAINST ANY CLAIMS, DEMANDS AND DAMAGES, WHETHER DIRECT,
                                    INDIRECT, CONSEQUENTIAL OR SPECIAL, OR ANY OTHER DAMAGES OF ANY KIND, INCLUDING, BUT
                                    NOT LIMITED TO, LOSS OF USE, LOSS OF PROFITS OR LOSS OF DATA, WHETHER IN AN ACTION
                                    IN CONTRACT, TORT (INCLUDING BUT NOT LIMITED TO NEGLIGENCE) OR OTHERWISE, ORIGINATED
                                    FROM OR IN ANY WAY CONNECTED WITH PROHIBITION AND DISCONTINUATION OF EXCHANGES IN
                                    OUR WEBSITE WITH ANY CRYPTO ASSET.</p>
                            </li>
                        </ol>
                        <h2 class="cl-heading style_heading__2L6sr style_color-gray__21bwd style_size-md__KBe3R"
                            style="zoom:1;text-align:left;margin-bottom:2rem">12.
                            <!-- -->No Offer of Securities
                        </h2>
                        <ol id="" class="cl-list style_wrapper-list__3MWDD">
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="12.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp"><?php echo $site_name; ?> takes
                                    all possible measures to integrate and exchange those digital coins and digital
                                    tokens and other types of digital mediums of exchange only that cannot be classified
                                    as “security“ by SEC or other competent national authorities.</p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="12.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">The
                                    responsibility for the fact that the crypto asset cannot be treated as “security“
                                    lies with the owner of digital token and/or digital coin. <?php echo $site_name; ?> reserves the
                                    right at its sole discretion to prohibit and discontinue any exchanges (as well as
                                    any other type of transaction) with the token or the coin if there is any risk or
                                    speculations that such token and/or coin can be treated as “security“.</p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="12.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">We follow the
                                    best practices to decide whether crypto assets are security or not. However, for the
                                    avoidance of any doubt the provisions of this clause shall not constitute or deemed
                                    to be construed to constitute any warranty and/or investment, financial, legal or
                                    any other professional advice, that any crypto asset that any crypto asset available
                                    through our Services is not a security.</p>
                            </li>
                        </ol>
                        <h2 class="cl-heading style_heading__2L6sr style_color-gray__21bwd style_size-md__KBe3R"
                            style="zoom:1;text-align:left;margin-bottom:2rem">13.
                            <!-- -->Termination of the Terms
                        </h2>
                        <ol id="" class="cl-list style_wrapper-list__3MWDD">
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="13.">
                                <section>
                                    <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">We reserve
                                        the right to terminate these Terms and delete your <?php echo $site_name; ?> Account and
                                        registration (including your username and password) in the following cases:</p>
                                    <ol id="" class="cl-list style_wrapper-list__3MWDD">
                                        <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                            data-starts-with="13.">
                                            <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">If
                                                for any reason We decide to discontinue to provide the Service, by
                                                providing at least a 3 (three) calendar days’ notice (which shall be
                                                provided by e-mail);</p>
                                        </li>
                                        <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                            data-starts-with="13.">
                                            <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">If
                                                We believe that you have breached any of the terms of these Terms,
                                                immediately without notice;</p>
                                        </li>
                                        <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                            data-starts-with="13.">
                                            <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">If
                                                We decide to terminate our Services, immediately without notice.</p>
                                        </li>
                                    </ol>
                                </section>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="13.">
                                <section>
                                    <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp"><?php echo $site_name; ?>
                                        may suspend or terminate your account or use of the Services, or the processing
                                        of any crypto asset transaction, at any time if it determines in its sole
                                        discretion that you are accessing the Services from a Restricted Location or are
                                        a resident of one (see cl.5.1.3. of our Terms of Use).</p>
                                </section>
                            </li>
                        </ol>
                        <h2 class="cl-heading style_heading__2L6sr style_color-gray__21bwd style_size-md__KBe3R"
                            style="zoom:1;text-align:left;margin-bottom:2rem">14.
                            <!-- -->Applicable Law; Arbitration
                        </h2>
                        <ol id="" class="cl-list style_wrapper-list__3MWDD">
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="14.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">You and
                                    <?php echo $site_name; ?> agree to arbitrate any dispute arising from these Terms or your use of the
                                    Services, except for disputes in which either party seeks equitable and other relief
                                    for the alleged unlawful use of copyrights, trademarks, trade names, logos, trade
                                    secrets or patents.</p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="14.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">
                                <div>You and <?php echo $site_name; ?> agree to notify each other in writing of any dispute within
                                    thirty (30) days of when it arises. Notice to <?php echo $site_name; ?> shall be sent to <a
                                        href="mailto:legal@<?php echo $site_name; ?>.com">legal@<?php echo $site_name; ?>.com</a></div>
                                </p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="14.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">Any dispute,
                                    controversy, difference or claim arising out of or relating to the Terms, including
                                    the existence, validity, interpretation, performance, breach or termination thereof
                                    or any dispute regarding non-contractual obligations arising out of or relating to
                                    it shall be referred to and finally resolved by arbitration administered by the Hong
                                    Kong International Arbitration Centre (HKIAC) under the HKIAC Administered
                                    Arbitration Rules in force when the Notice of Arbitration is submitted.</p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="14.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">The law of this
                                    arbitration clause shall be Hong Kong law.</p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="14.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">The seat of
                                    arbitration shall be in Hong Kong.</p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="14.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">The number of
                                    arbitrators shall be one. The arbitration proceedings shall be conducted in English
                                    language.</p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="14.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">Other than
                                    class procedures and remedies discussed below, the arbitrator has the authority to
                                    grant any remedy that would otherwise be available in court. Any dispute between the
                                    parties will be governed by these Terms and the laws of Hong Kong, without giving
                                    effect to any conflict of laws principles that may provide for the application of
                                    the law of another jurisdiction.</p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="14.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">Whether the
                                    dispute is heard in arbitration or in court, you will not commence against <?php echo $site_name; ?>
                                    a class action, class arbitration or representative action or proceeding.</p>
                            </li>
                        </ol>
                        <h2 class="cl-heading style_heading__2L6sr style_color-gray__21bwd style_size-md__KBe3R"
                            style="zoom:1;text-align:left;margin-bottom:2rem">15.
                            <!-- -->Miscellaneous
                        </h2>
                        <ol id="" class="cl-list style_wrapper-list__3MWDD">
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="15.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">These Terms
                                    contain the entire agreement, and supersede all prior and contemporaneous
                                    understandings between the parties regarding the Services.</p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="15.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">In the event of
                                    any conflict between these Terms and any other agreement you may have with
                                    <?php echo $site_name; ?>, the terms of that other agreement will prevail only if these Terms are
                                    specifically identified and declared to be overridden by such other agreement.</p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="15.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">Our failure or
                                    delay in exercising any right, power or privilege under these Terms shall not
                                    operate as a waiver thereof.</p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="15.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">The invalidity
                                    or unenforceability of any of these Terms shall not affect the validity or
                                    enforceability of any other of these Terms, all of which shall remain in full force
                                    and effect.</p>
                            </li>
                            <li class="style_wrapper-list-item__3tgLt cl-list__item style_is-enum-bullet__3mFXD "
                                data-starts-with="15.">
                                <p class="cl-para style_wrapper-paragraph__Qbgha style_is-shaded__2GIhp">You may not
                                    assign or transfer any of your rights or obligations under these Terms without prior
                                    written consent from <?php echo $site_name; ?>, including by operation of law or in connection with
                                    any change of control. <?php echo $site_name; ?> may assign or transfer any or all of its rights
                                    under these Terms, in whole or in part, without obtaining your consent or approval.
                                </p>
                            </li>
                        </ol>
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
