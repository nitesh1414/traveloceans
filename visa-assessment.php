<?php
$page_title = 'Free Visa Assessment';
require_once __DIR__ . '/includes/header.php';
?>

<link rel="stylesheet" href="<?= SITE_URL ?>/assets/css/visa-assessment.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<section class="assessment-hero" aria-label="Assessment header">
  <div class="container hero-content">
    <span class="badge bg-white text-primary px-3 py-2 mb-3" style="font-weight:600;letter-spacing:.04em;font-size:.78rem;">FREE CONSULTATION</span>
    <h1>Global Visa Assessment</h1>
    <p class="lead">Complete the form below for a personalized evaluation of your visa pathway, eligibility, and documentation needs.</p>
  </div>
  <svg class="w-100 d-block position-absolute bottom-0" style="transform:translateY(1px);" viewBox="0 0 1200 60" preserveAspectRatio="none" height="60"><path fill="#f6f9fc" d="M0 60 Q600 0 1200 60 Z"/></svg>
</section>

<div class="breadcrumb-wrapper">
  <div class="container">
    <nav aria-label="Breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= SITE_URL ?>/index.php">Home</a></li>
        <li class="breadcrumb-item"><a href="<?= SITE_URL ?>/services.php">Services</a></li>
        <li class="breadcrumb-item active" aria-current="page">Visa Assessment</li>
      </ol>
    </nav>
  </div>
</div>

<section class="section assessment-wrap py-5">
  <div class="container">
    <div class="row g-5">
      <!-- Main Form -->
      <div class="col-lg-8" data-aos="fade-right">
        <div class="d-flex align-items-center gap-2 mb-3">
          <h2 class="mb-0 h4 fw-bold" style="font-family:'Playfair Display',serif;color:var(--va-text);">Assessment Form</h2>
          <span class="badge bg-primary">All fields required unless noted</span>
        </div>
        <p class="text-muted mb-4">Please fill out all sections honestly and completely. Your information is kept confidential and used only to prepare your evaluation.</p>

        <form id="assessmentForm" class="ajax-form" method="post" action="<?= SITE_URL ?>/api/visa_assessment.php" novalidate>
          <input type="hidden" name="csrf_token" value="<?= csrf_token() ?>">

          <!-- 1. Personal -->
          <div class="section-card mb-4" id="sec-1">
            <div class="section-header">
              <div class="icon-circle"><i class="bi bi-person-fill"></i></div>
              <h3>Personal &amp; Identity Information</h3>
              <span class="step-num">01 / 09</span>
            </div>
            <div class="p-3 p-md-4">
              <div class="row g-3">
                <div class="col-md-6"><label for="full_legal_name" class="form-label">Full Legal Name (As shown on passport) <span class="text-danger">*</span></label><input type="text" id="full_legal_name" name="full_legal_name" class="form-control" required></div>
                <div class="col-md-6"><label for="dob" class="form-label">Date of Birth <span class="text-danger">*</span></label><input type="date" id="dob" name="dob" class="form-control" required></div>
                <div class="col-md-6"><label for="gender" class="form-label">Gender <span class="text-danger">*</span></label><select id="gender" name="gender" class="form-select" required><option value="">-- Select --</option><option>Male</option><option>Female</option><option>Non-binary</option><option>Prefer not to say</option></select></div>
                <div class="col-md-4"><label for="birthplace_country" class="form-label">Birthplace Country <span class="text-danger">*</span></label><select id="birthplace_country" name="birthplace_country" class="form-select country-select" data-state="birthplace_state" data-city="birthplace_city" required><option value="">-- Select Country --</option><option>India</option><option>Portugal</option><option>Spain</option><option>Germany</option><option>United Kingdom</option><option>United States</option><option>Canada</option><option>France</option><option>UAE</option><option>Australia</option><option>Netherlands</option><option>Italy</option><option>Switzerland</option><option>Sweden</option><option>Norway</option><option>Ireland</option></select></div>
                <div class="col-md-4"><label for="birthplace_state" class="form-label">State / Province</label><select id="birthplace_state" name="birthplace_state" class="form-select state-select" data-country="birthplace_country" data-city="birthplace_city"><option value="">-- Select --</option></select></div>
                <div class="col-md-4"><label for="birthplace_city" class="form-label">City</label><select id="birthplace_city" name="birthplace_city" class="form-select city-select" data-country="birthplace_country" data-state="birthplace_state"><option value="">-- Select --</option></select></div>
                <div class="col-md-6"><label for="nationality" class="form-label">Current Nationality / Citizenships Held</label><input type="text" id="nationality" name="nationality" class="form-control" required></div>
                <div class="col-md-6"><label for="passport_number" class="form-label">Passport Number</label><input type="text" id="passport_number" name="passport_number" class="form-control"></div>
                <div class="col-md-6"><label for="passport_issue" class="form-label">Passport Issue Date</label><input type="date" id="passport_issue" name="passport_issue" class="form-control"></div>
                <div class="col-md-6"><label for="passport_expiry" class="form-label">Passport Expiry Date</label><input type="date" id="passport_expiry" name="passport_expiry" class="form-control"></div>
                <div class="col-md-4"><label for="address_country" class="form-label">Country</label><select id="address_country" name="address_country" class="form-select country-select" data-state="address_state" data-city="address_city"><option value="">-- Select --</option><option>India</option><option>Portugal</option><option>Spain</option><option>Germany</option><option>United Kingdom</option><option>United States</option><option>Canada</option><option>France</option><option>UAE</option><option>Australia</option></select></div>
                <div class="col-md-4"><label for="address_state" class="form-label">State / Province</label><select id="address_state" name="address_state" class="form-select state-select" data-country="address_country" data-city="address_city"><option value="">-- Select --</option></select></div>
                <div class="col-md-4"><label for="address_city" class="form-label">City</label><select id="address_city" name="address_city" class="form-select city-select" data-country="address_country" data-state="address_state"><option value="">-- Select --</option></select></div>
                <div class="col-12"><label for="address" class="form-label">Street / Full Address</label><textarea id="address" name="address" rows="2" class="form-control" placeholder="Street, apartment, building, zip code"></textarea></div>
                <div class="col-md-6"><label for="phone" class="form-label">Phone (with country code)</label><input type="text" id="phone" name="phone" class="form-control" placeholder="+44 7123 456 789" required></div>
                <div class="col-md-6"><label for="email" class="form-label">Email Address <span class="text-danger">*</span></label><input type="email" id="email" name="email" class="form-control" required></div>
              </div>
            </div>
          </div>

          <!-- 2. Marital -->
          <div class="section-card mb-4" id="sec-2">
            <div class="section-header">
              <div class="icon-circle" style="background:linear-gradient(135deg,#6610f2,#4a0e99);"><i class="bi bi-people-fill"></i></div>
              <h3>Marital &amp; Family Status</h3>
              <span class="step-num">02 / 09</span>
            </div>
            <div class="p-3 p-md-4">
              <div class="row g-3">
                <div class="col-md-6"><label for="marital_status" class="form-label">Marital Status <span class="text-danger">*</span></label><select id="marital_status" name="marital_status" class="form-select"><option value="">-- Select --</option><option>Single</option><option>Married</option><option>Divorced</option><option>Widowed</option><option>Common-law</option></select></div>
                <div class="col-md-6"><label for="dependent_children" class="form-label">Number of Dependent Children</label><input type="number" id="dependent_children" name="dependent_children" class="form-control" min="0" max="10" value="0"></div>
                <div class="col-12">
                  <label class="form-label">Dependent Children <span class="text-muted">(add as needed)</span></label>
                  <div id="children-container">
                    <div class="child-row row g-2 mb-2 align-items-end" data-index="0">
                      <div class="col-md-4"><input type="text" name="children[0][name]" class="form-control" placeholder="Child Name"></div>
                      <div class="col-md-3"><input type="number" name="children[0][age]" class="form-control" placeholder="Age" min="0" max="120"></div>
                      <div class="col-md-3"><input type="text" name="children[0][nationality]" class="form-control" placeholder="Nationality"></div>
                      <div class="col-md-2"><button type="button" class="btn btn-sm btn-outline-danger w-100 remove-child">Remove</button></div>
                    </div>
                  </div>
                  <button type="button" id="add-child" class="btn btn-sm btn-outline-primary mt-1"><i class="bi bi-plus-lg"></i> Add Child</button>
                </div>
                <div class="col-12"><label for="spouse_partner_details" class="form-label">Spouse / Partner Details (Name, DOB, Nationality — if traveling together)</label><textarea id="spouse_partner_details" name="spouse_partner_details" rows="2" class="form-control"></textarea></div>

              </div>
            </div>
          </div>

          <!-- 3. Travel -->
          <div class="section-card mb-4" id="sec-3">
            <div class="section-header">
              <div class="icon-circle" style="background:linear-gradient(135deg,#e88a17,#d07a0f);"><i class="bi bi-airplane-fill"></i></div>
              <h3>Intended Travel &amp; Visa Purpose</h3>
              <span class="step-num">03 / 09</span>
            </div>
            <div class="p-3 p-md-4">
              <div class="row g-3">
                <div class="col-md-6"><label for="target_countries" class="form-label">Current Country <span class="text-danger">*</span></label><input type="text" id="target_countries" name="target_countries" class="form-control" placeholder="e.g., Portugal, Spain" required></div>
                <div class="col-md-6"><label for="visa_category" class="form-label">Type of Visa / Category Sought <span class="text-danger">*</span></label><select id="visa_category" name="visa_category" class="form-select"><option value="">-- Select --</option><option>Tourist / Visitor</option><option>Student</option><option>Work Permit</option><option>Permanent Residency</option><option>Business / Investor</option></select></div>
                <div class="col-md-6"><label for="intended_travel_date" class="form-label">Intended Date of Travel / Relocation</label><input type="date" id="intended_travel_date" name="intended_travel_date" class="form-control"></div>
                <div class="col-md-6"><label for="expected_duration" class="form-label">Expected Duration of Stay</label><input type="text" id="expected_duration" name="expected_duration" class="form-control" placeholder="e.g., 6 months, Permanent"></div>
                <div class="col-md-6">
                  <label for="previous_visa_yesno" class="form-label">Ever applied for a visa before? <span class="text-danger">*</span></label>
                  <select id="previous_visa_yesno" name="previous_visa_yesno" class="form-select conditional-trigger" data-target="prev_visa_cond"><option value="">-- Select --</option><option>Yes</option><option>No</option></select>
                </div>
                <div class="col-12 conditional-field" id="prev_visa_cond"><label for="previous_visa_details" class="form-label">Provide details and dates</label><textarea id="previous_visa_details" name="previous_visa_details" rows="2" class="form-control"></textarea></div>
                <div class="col-md-6">
                  <label for="refusal_yesno" class="form-label">Ever had a refusal / cancellation / deportation? <span class="text-danger">*</span></label>
                  <select id="refusal_yesno" name="refusal_yesno" class="form-select conditional-trigger" data-target="refusal_cond"><option value="">-- Select --</option><option>Yes</option><option>No</option></select>
                </div>
                <div class="col-12 conditional-field" id="refusal_cond"><label for="refusal_details" class="form-label">Provide details and dates</label><textarea id="refusal_details" name="refusal_details" rows="2" class="form-control"></textarea></div>
                <div class="col-md-6">
                  <label for="family_target_country" class="form-label">Do you have immediate family in target country? <span class="text-danger">*</span></label>
                  <select id="family_target_country" name="family_target_country" class="form-select conditional-trigger" data-target="family_target_cond"><option value="">-- Select --</option><option>Yes</option><option>No</option></select>
                </div>
                <div class="col-12 conditional-field" id="family_target_cond"><label for="family_target_details" class="form-label">Specify relation and status</label><textarea id="family_target_details" name="family_target_details" rows="2" class="form-control"></textarea></div>
              </div>
            </div>
          </div>

          <!-- 4. Education -->
          <div class="section-card mb-4" id="sec-4">
            <div class="section-header">
              <div class="icon-circle" style="background:linear-gradient(135deg,#20c997,#158f6d);"><i class="bi bi-mortarboard-fill"></i></div>
              <h3>Educational Background</h3>
              <span class="step-num">04 / 09</span>
            </div>
            <div class="p-3 p-md-4">
              <div class="row g-3">
                <div class="col-md-6"><label for="education_level" class="form-label">Highest Level Completed <span class="text-danger">*</span></label><select id="education_level" name="education_level" class="form-select"><option value="">-- Select --</option><option>High School</option><option>Bachelor’s Degree</option><option>Master’s Degree</option><option>Doctorate</option><option>Trade Certificate</option></select></div>
                <div class="col-md-6"><label for="institution_country" class="form-label">Institution &amp; Country</label><input type="text" id="institution_country" name="institution_country" class="form-control" placeholder="Name, Country"></div>
                <div class="col-md-6"><label for="field_of_study" class="form-label">Field of Study / Major</label><input type="text" id="field_of_study" name="field_of_study" class="form-control"></div>
                <div class="col-md-6"><label for="graduation_year" class="form-label">Year of Graduation</label><input type="text" id="graduation_year" name="graduation_year" class="form-control" placeholder="YYYY"></div>
              </div>
            </div>
          </div>

          <!-- 5. Language -->
          <div class="section-card mb-4" id="sec-5">
            <div class="section-header">
              <div class="icon-circle" style="background:linear-gradient(135deg,#6610f2,#3d0e7e);"><i class="bi bi-translate"></i></div>
              <h3>Language Proficiency</h3>
              <span class="step-num">05 / 09</span>
            </div>
            <div class="p-3 p-md-4">
              <div class="row g-3">
                <div class="col-md-6"><label for="native_language" class="form-label">Native Language</label><input type="text" id="native_language" name="native_language" class="form-control"></div>
                <div class="col-md-6"><label for="english_proficiency" class="form-label">English Proficiency <span class="text-danger">*</span></label><select id="english_proficiency" name="english_proficiency" class="form-select"><option value="">-- Select --</option><option>None</option><option>Basic</option><option>Intermediate</option><option>Fluent</option><option>Native</option></select></div>
                <div class="col-md-6"><label for="english_test_score" class="form-label">IELTS / PTE / TOEFL Score &amp; Date</label><input type="text" id="english_test_score" name="english_test_score" class="form-control" placeholder="e.g., IELTS 7.0 — Jan 2024"></div>
                <div class="col-md-6"><label for="other_languages" class="form-label">Other Languages Spoken (Specify level)</label><textarea id="other_languages" name="other_languages" rows="2" class="form-control"></textarea></div>
                <div class="col-12"><label for="french_spanish_test_score" class="form-label">TEF / TCF (French) or DELE (Spanish) — Score &amp; Date</label><input type="text" id="french_spanish_test_score" name="french_spanish_test_score" class="form-control"></div>
              </div>
            </div>
          </div>

          <!-- 6. Work -->
          <div class="section-card mb-4" id="sec-6">
            <div class="section-header">
              <div class="icon-circle" style="background:linear-gradient(135deg,#0d6efd,#0a4d8c);"><i class="bi bi-briefcase-fill"></i></div>
              <h3>Work History &amp; Professional Experience</h3>
              <span class="step-num">06 / 09</span>
            </div>
            <div class="p-3 p-md-4">
              <div class="row g-3">
                <div class="col-md-6"><label for="employment_status" class="form-label">Current Employment Status <span class="text-danger">*</span></label><select id="employment_status" name="employment_status" class="form-select"><option value="">-- Select --</option><option>Employed Full-Time</option><option>Self-Employed</option><option>Unemployed</option><option>Student</option><option>Retired</option></select></div>
                <div class="col-md-6"><label for="job_title" class="form-label">Current Job Title / Occupation</label><input type="text" id="job_title" name="job_title" class="form-control"></div>
                <div class="col-md-6"><label for="employer_industry" class="form-label">Employer Name &amp; Industry</label><input type="text" id="employer_industry" name="employer_industry" class="form-control" placeholder="Company — Industry"></div>
                <div class="col-md-6"><label for="years_experience" class="form-label">Years of Continuous Work Experience</label><input type="text" id="years_experience" name="years_experience" class="form-control" placeholder="e.g., 5 years"></div>
                <div class="col-12"><label for="employment_summary" class="form-label">Summary of Past 10 Years of Employment</label><textarea id="employment_summary" name="employment_summary" rows="3" class="form-control"></textarea></div>
                <div class="col-md-6"><label for="employer1_details" class="form-label">Employer 1 — Dates, Title, Duties</label><textarea id="employer1_details" name="employer1_details" rows="2" class="form-control"></textarea></div>
                <div class="col-md-6"><label for="employer2_details" class="form-label">Employer 2 — Dates, Title, Duties</label><textarea id="employer2_details" name="employer2_details" rows="2" class="form-control"></textarea></div>
              </div>
            </div>
          </div>

          <!-- 7. Financial -->
          <div class="section-card mb-4" id="sec-7">
            <div class="section-header">
              <div class="icon-circle" style="background:linear-gradient(135deg,#ffc107,#e6a500);"><i class="bi bi-cash-stack"></i></div>
              <h3>Financial Standing &amp; Support</h3>
              <span class="step-num">07 / 09</span>
            </div>
            <div class="p-3 p-md-4">
              <div class="row g-3">
                <div class="col-md-6"><label for="source_of_funds" class="form-label">Source of Funds <span class="text-danger">*</span></label><select id="source_of_funds" name="source_of_funds" class="form-select"><option value="">-- Select --</option><option>Personal Savings</option><option>Employer Sponsorship</option><option>Family Sponsor</option><option>Business Revenue</option></select></div>
                <div class="col-md-6"><label for="liquid_funds" class="form-label">Approximate Liquid Funds (USD or local)</label><input type="text" id="liquid_funds" name="liquid_funds" class="form-control" placeholder="e.g., $25,000"></div>
                <div class="col-md-6"><label for="monthly_income" class="form-label">Monthly Income / Salary</label><input type="text" id="monthly_income" name="monthly_income" class="form-control" placeholder="e.g., $3,500 / month"></div>
                <div class="col-md-6">
                  <label for="assets_yesno" class="form-label">Own real estate, vehicles, or major assets? <span class="text-danger">*</span></label>
                  <select id="assets_yesno" name="assets_yesno" class="form-select conditional-trigger" data-target="assets_cond"><option value="">-- Select --</option><option>Yes</option><option>No</option></select>
                </div>
                <div class="col-12 conditional-field" id="assets_cond"><label for="assets_summary" class="form-label">Provide brief summary to show strong home ties</label><textarea id="assets_summary" name="assets_summary" rows="2" class="form-control"></textarea></div>
              </div>
            </div>
          </div>

          <!-- 8. Travel History -->
          <div class="section-card mb-4" id="sec-8">
            <div class="section-header">
              <div class="icon-circle" style="background:linear-gradient(135deg,#00b3a4,#007a71);"><i class="bi bi-globe"></i></div>
              <h3>Travel History</h3>
              <span class="step-num">08 / 09</span>
            </div>
            <div class="p-3 p-md-4">
              <div class="row g-3">
                <div class="col-12"><label for="travel_history_countries" class="form-label">Countries visited in the last 10 years</label><textarea id="travel_history_countries" name="travel_history_countries" rows="2" class="form-control"></textarea></div>
                <div class="col-md-6">
                  <label for="valid_visas_yesno" class="form-label">Hold valid travel visas? <span class="text-danger">*</span></label>
                  <select id="valid_visas_yesno" name="valid_visas_yesno" class="form-select conditional-trigger" data-target="visas_cond"><option value="">-- Select --</option><option>Yes</option><option>No</option></select>
                </div>
                <div class="col-12 conditional-field" id="visas_cond"><label for="valid_visas_list" class="form-label">List them (e.g., US B1/B2, Schengen, UK Standard Visitor)</label><textarea id="valid_visas_list" name="valid_visas_list" rows="2" class="form-control"></textarea></div>
              </div>
            </div>
          </div>

          <!-- 9. Background -->
          <div class="section-card mb-4" id="sec-9">
            <div class="section-header">
              <div class="icon-circle" style="background:linear-gradient(135deg,#dc3545,#8b1e2e);"><i class="bi bi-shield-check"></i></div>
              <h3>Background &amp; Legal Health History</h3>
              <span class="step-num">09 / 09</span>
            </div>
            <div class="p-3 p-md-4">
              <div class="row g-3">
                <div class="col-md-6">
                  <label for="criminal_record_yesno" class="form-label">Arrested / convicted / charged in any country? <span class="text-danger">*</span></label>
                  <select id="criminal_record_yesno" name="criminal_record_yesno" class="form-select conditional-trigger" data-target="crime_cond"><option value="">-- Select --</option><option>Yes</option><option>No</option></select>
                </div>
                <div class="col-12 conditional-field" id="crime_cond"><label for="criminal_details" class="form-label">Provide details if applicable</label><textarea id="criminal_details" name="criminal_details" rows="2" class="form-control"></textarea></div>
                <div class="col-md-6">
                  <label for="medical_conditions_yesno" class="form-label">Serious / chronic medical conditions? <span class="text-danger">*</span></label>
                  <select id="medical_conditions_yesno" name="medical_conditions_yesno" class="form-select conditional-trigger" data-target="med_cond"><option value="">-- Select --</option><option>Yes</option><option>No</option></select>
                </div>
                <div class="col-12 conditional-field" id="med_cond"><label for="medical_details" class="form-label">Provide brief details if applicable</label><textarea id="medical_details" name="medical_details" rows="2" class="form-control"></textarea></div>
              </div>
            </div>
          </div>

          <!-- Submit -->
          <div class="d-flex align-items-center gap-3 flex-wrap mb-4">
            <button type="submit" class="submit-btn">Submit Assessment <i class="bi bi-send ms-1"></i></button>
            <span class="text-muted small">By submitting, you agree to our privacy practices and consent to be contacted by our consultants.</span>
          </div>
          <div class="form-message"></div>
        </form>
      </div>

      <!-- Side Panel -->
      <aside class="col-lg-4" data-aos="fade-left">
        <div class="side-card mb-4">
          <h4><i class="bi bi-info-circle-fill text-primary me-2"></i>What happens next?</h4>
          <ul class="list-unstyled mt-3 mb-0 small text-muted">
            <li class="d-flex gap-2 mb-2"><span style="color:var(--va-accent);font-weight:700;">1.</span> Our consultants review your form within 24–48 hours.</li>
            <li class="d-flex gap-2 mb-2"><span style="color:var(--va-accent);font-weight:700;">2.</span> We prepare a customized pathway and document checklist.</li>
            <li class="d-flex gap-2 mb-2"><span style="color:var(--va-accent);font-weight:700;">3.</span> You receive a free consultation call / email with recommendations.</li>
            <li class="d-flex gap-2"><span style="color:var(--va-accent);font-weight:700;">4.</span> If needed, we assist with application support and appointments.</li>
          </ul>
        </div>

        <div class="side-card mb-4" style="background:linear-gradient(135deg,#0a4d8c,#073a6b);color:#fff;border-color:transparent;">
          <h4 style="color:#fff;"><i class="bi bi-headset me-2"></i>Need help filling this out?</h4>
          <p class="small mb-3" style="opacity:.9;">Our team can assist with complex sections such as work history or financial documentation.</p>
          <a href="mailto:<?= e(setting('site_email')) ?>" class="btn btn-light btn-sm w-100 mb-2"><i class="bi bi-envelope me-1"></i> Email Us</a>
          <a href="https://wa.me/<?= preg_replace('/[^0-9]/','',setting('whatsapp')) ?>" target="_blank" class="btn btn-success btn-sm w-100"><i class="bi bi-whatsapp me-1"></i> WhatsApp Chat</a>
        </div>

        <div class="side-card">
          <h4><i class="bi bi-check-circle-fill text-success me-2"></i>Assessment is confidential</h4>
          <p class="small text-muted mb-0">We never share your personal data with third parties. All assessments are stored securely and accessed only by authorized consultants.</p>
        </div>
      </aside>
    </div>
  </div>
</section>

  var locationData = {"India": {"Maharashtra": ["Mumbai", "Pune", "Nagpur"], "Delhi": ["New Delhi"], "Karnataka": ["Bangalore", "Mysore"], "Tamil Nadu": ["Chennai"], "Telangana": ["Hyderabad"], "Gujarat": ["Ahmedabad"], "West Bengal": ["Kolkata"], "Rajasthan": ["Jaipur"], "Uttar Pradesh": ["Lucknow"], "Bihar": ["Patna"], "Punjab": ["Ludhiana"]}, "Portugal": {"Lisbon": ["Lisbon", "Sintra"], "Porto": ["Porto"], "Faro": ["Faro"], "Coimbra": ["Coimbra"], "Braga": ["Braga"]}, "Spain": {"Madrid": ["Madrid"], "Barcelona": ["Barcelona"], "Valencia": ["Valencia"], "Sevilla": ["Sevilla"]}, "Germany": {"Berlin": ["Berlin"], "Bavaria": ["Munich"], "North Rhine-Westphalia": ["Cologne"], "Hesse": ["Frankfurt"]}, "United Kingdom": {"England": ["London", "Manchester"], "Scotland": ["Edinburgh"], "Wales": ["Cardiff"]}, "United States": {"California": ["Los Angeles", "San Francisco"], "Texas": ["Houston", "Dallas"], "New York": ["New York City"], "Florida": ["Miami"]}, "Canada": {"Ontario": ["Toronto", "Ottawa"], "British Columbia": ["Vancouver"], "Quebec": ["Montreal"]}, "France": {"\u00cele-de-France": ["Paris"], "Provence": ["Marseille"], "Lyon": ["Lyon"]}, "UAE": {"Dubai": ["Dubai"], "Abu Dhabi": ["Abu Dhabi"]}, "Australia": {"New South Wales": ["Sydney"], "Victoria": ["Melbourne"], "Queensland": ["Brisbane"]}, "Netherlands": {"North Holland": ["Amsterdam"], "South Holland": ["Rotterdam"]}, "Italy": {"Lombardy": ["Milan"], "Lazio": ["Rome"], "Campania": ["Naples"]}, "Switzerland": {"Zurich": ["Zurich"], "Geneva": ["Geneva"]}, "Sweden": {"Stockholm": ["Stockholm"], "Sk\u00e5ne": ["Malm\u00f6"]}, "Norway": {"Oslo": ["Oslo"], "Vestland": ["Bergen"]}, "Ireland": {"Dublin": ["Dublin"], "Cork": ["Cork"]}, "China": {"Beijing": ["Beijing"], "Shanghai": ["Shanghai"], "Guangdong": ["Guangzhou"], "Zhejiang": ["Hangzhou"]}, "Japan": {"Tokyo": ["Tokyo"], "Osaka": ["Osaka"], "Hokkaido": ["Sapporo"]}, "Brazil": {"S\u00e3o Paulo": ["S\u00e3o Paulo"], "Rio de Janeiro": ["Rio de Janeiro"], "Minas Gerais": ["Belo Horizonte"]}, "Mexico": {"Mexico City": ["Mexico City"], "Jalisco": ["Guadalajara"], "Nuevo Le\u00f3n": ["Monterrey"]}, "Argentina": {"Buenos Aires": ["Buenos Aires"], "C\u00f3rdoba": ["C\u00f3rdoba"]}, "South Africa": {"Gauteng": ["Johannesburg"], "Western Cape": ["Cape Town"]}, "Nigeria": {"Lagos": ["Lagos"], "Federal Capital Territory": ["Abuja"]}, "Kenya": {"Nairobi": ["Nairobi"]}, "Egypt": {"Cairo": ["Cairo"], "Alexandria": ["Alexandria"]}, "Saudi Arabia": {"Riyadh": ["Riyadh"], "Makkah": ["Makkah"]}, "Singapore": {"Singapore": ["Singapore"]}, "Malaysia": {"Kuala Lumpur": ["Kuala Lumpur"], "Selangor": ["Shah Alam"]}, "Thailand": {"Bangkok": ["Bangkok"], "Chiang Mai": ["Chiang Mai"]}, "Indonesia": {"Jakarta": ["Jakarta"], "West Java": ["Bandung"]}, "Philippines": {"Manila": ["Manila"], "Cebu": ["Cebu City"]}, "South Korea": {"Seoul": ["Seoul"], "Busan": ["Busan"]}, "Taiwan": {"Taipei": ["Taipei"], "Kaohsiung": ["Kaohsiung"]}, "New Zealand": {"Auckland": ["Auckland"], "Wellington": ["Wellington"]}, "Russia": {"Moscow": ["Moscow"], "Saint Petersburg": ["Saint Petersburg"]}, "Ukraine": {"Kyiv": ["Kyiv"], "Kharkiv": ["Kharkiv"]}, "Poland": {"Warsaw": ["Warsaw"], "Krak\u00f3w": ["Krak\u00f3w"]}, "Czech Republic": {"Prague": ["Prague"], "Brno": ["Brno"]}, "Hungary": {"Budapest": ["Budapest"]}, "Romania": {"Bucharest": ["Bucharest"]}, "Bulgaria": {"Sofia": ["Sofia"]}, "Greece": {"Athens": ["Athens"], "Thessaloniki": ["Thessaloniki"]}, "Turkey": {"Istanbul": ["Istanbul"], "Ankara": ["Ankara"]}, "Israel": {"Jerusalem": ["Jerusalem"]}, "Jordan": {"Amman": ["Amman"]}, "Lebanon": {"Beirut": ["Beirut"]}, "Morocco": {"Casablanca": ["Casablanca"]}, "Tunisia": {"Tunis": ["Tunis"]}, "Algeria": {"Algiers": ["Algiers"]}, "Colombia": {"Bogot\u00e1": ["Bogot\u00e1"], "Medell\u00edn": ["Medell\u00edn"]}, "Peru": {"Lima": ["Lima"]}, "Chile": {"Santiago": ["Santiago"]}, "Venezuela": {"Caracas": ["Caracas"]}, "Ecuador": {"Quito": ["Quito"]}, "Bolivia": {"La Paz": ["La Paz"]}, "Paraguay": {"Asunci\u00f3n": ["Asunci\u00f3n"]}, "Uruguay": {"Montevideo": ["Montevideo"]}, "Cuba": {"Havana": ["Havana"]}, "Dominican Republic": {"Santo Domingo": ["Santo Domingo"]}, "Jamaica": {"Kingston": ["Kingston"]}, "Trinidad and Tobago": {"Port of Spain": ["Port of Spain"]}};

<script>
  // Conditional reveal
  $(document).on('change', '.conditional-trigger', function() {
    var target = document.getElementById($(this).data('target'));
    if (target) target.classList.toggle('show', $(this).val() === 'Yes');
  });

  // Select2 search dropdowns
  $(document).ready(function() {
    $('#birthplace_country, #address_country').select2({ placeholder: "-- Select Country --", allowClear: true, width: '100%' });
    $('#birthplace_state, #address_state').select2({ placeholder: "-- Select State --", allowClear: true, width: '100%' });
    $('#birthplace_city, #address_city').select2({ placeholder: "-- Select City --", allowClear: true, tags: true, width: '100%' });
    // target_countries is text input; keep native for now
    // $('#target_countries').select2({ placeholder: "-- Select Country --", allowClear: true, width: '100%' });
  });

  // Cascading country/state/city (jQuery)
  function updateCascading(fromEl) {
    var country = $(fromEl).val();
    if (!country) return;
    var stateId = $(fromEl).data('state') || $(fromEl).attr('data-state');
    var cityId = $(fromEl).data('city') || $(fromEl).attr('data-city');
    var $state = $('#' + stateId);
    var $city = $('#' + cityId);
    if ($state.length) {
      $state.empty().append('<option value="">-- Select --</option>');
      var states = locationData[country] ? Object.keys(locationData[country]) : [];
      states.forEach(function(s){ $state.append(new Option(s, s)); });
      $state.trigger('change.select2');
      if ($city.length) $city.empty().append('<option value="">-- Select --</option>');
    }
  }
  function updateCities(fromEl) {
    var countryId = $(fromEl).attr('data-country');
    var state = $(fromEl).val();
    if (!countryId || !state) return;
    var country = $('#' + countryId).val();
    var cityId = $(fromEl).attr('data-city');
    var $city = $('#' + cityId);
    if ($city.length && locationData[country] && locationData[country][state]) {
      $city.empty().append('<option value="">-- Select --</option>');
      locationData[country][state].forEach(function(c){ $city.append(new Option(c, c)); });
    } else if ($city.length) {
      $city.empty().append('<option value="">-- Select --</option>');
    }
    $city.trigger('change.select2');
  }
  $('#birthplace_country, #address_country').on('change', function() { updateCascading(this); });
  $('#birthplace_state, #address_state').on('change', function() { updateCities(this); });

  // Dynamic children
  var childIndex = 1;
  $('#add-child').on('click', function(){
    var row = '<div class="child-row row g-2 mb-2 align-items-end" data-index="'+childIndex+'">' +
      '<div class="col-md-4"><input type="text" name="children['+childIndex+'][name]" class="form-control" placeholder="Child Name"></div>' +
      '<div class="col-md-3"><input type="number" name="children['+childIndex+'][age]" class="form-control" placeholder="Age" min="0" max="120"></div>' +
      '<div class="col-md-3"><input type="text" name="children['+childIndex+'][nationality]" class="form-control" placeholder="Nationality"></div>' +
      '<div class="col-md-2"><button type="button" class="btn btn-sm btn-outline-danger w-100 remove-child">Remove</button></div>' +
      '</div>';
    $('#children-container').append(row);
    childIndex++;
  });
  $('#children-container').on('click', '.remove-child', function(){
    $(this).closest('.child-row').remove();
  });
</script>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
