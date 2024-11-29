<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal - Church Management Settings</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
</head>
<body>

<div class="container my-5">
    <h1 class="text-center">Admin Settings Portal</h1>
    <p class="text-center text-muted">Manage church configurations, user roles, events, and financial settings.</p>

    <!-- Accordion for Admin Settings -->
    <div class="accordion" id="settingsAccordion">

        <!-- General Church Settings -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingGeneral">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGeneral" aria-expanded="true" aria-controls="collapseGeneral">
                    General Church Settings
                </button>
            </h2>
            <div id="collapseGeneral" class="accordion-collapse collapse show" aria-labelledby="headingGeneral" data-bs-parent="#settingsAccordion">
                <div class="accordion-body">
                    <form>
                        <div class="mb-3">
                            <label for="churchName" class="form-label">Church Name</label>
                            <input type="text" class="form-control" id="churchName" placeholder="Enter church name">
                        </div>
                        <div class="mb-3">
                            <label for="churchAddress" class="form-label">Church Address</label>
                            <input type="text" class="form-control" id="churchAddress" placeholder="Enter physical address">
                        </div>
                        <div class="mb-3">
                            <label for="contactEmail" class="form-label">Primary Contact Email</label>
                            <input type="email" class="form-control" id="contactEmail" placeholder="e.g., admin@churchname.org">
                        </div>
                        <div class="mb-3">
                            <label for="serviceTimes" class="form-label">Regular Service Times</label>
                            <input type="text" class="form-control" id="serviceTimes" placeholder="e.g., Sundays at 10 AM">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- User and Role Management -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingUserRoles">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseUserRoles" aria-expanded="false" aria-controls="collapseUserRoles">
                    User and Role Management
                </button>
            </h2>
            <div id="collapseUserRoles" class="accordion-collapse collapse" aria-labelledby="headingUserRoles" data-bs-parent="#settingsAccordion">
                <div class="accordion-body">
                    <form>
                        <div class="mb-3">
                            <label for="roles" class="form-label">Assign Roles and Permissions</label>
                            <select class="form-select" id="roles">
                                <option value="Admin">Admin</option>
                                <option value="Pastor">Pastor</option>
                                <option value="Member">Member</option>
                                <option value="Volunteer">Volunteer</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="userRegistration" class="form-label">User Registration Access</label>
                            <select class="form-select" id="userRegistration">
                                <option value="Open">Open (Anyone can register)</option>
                                <option value="ApprovalRequired">Approval Required</option>
                                <option value="Closed">Closed (Admins only)</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Event and Service Settings -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingEvents">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEvents" aria-expanded="false" aria-controls="collapseEvents">
                    Event and Service Settings
                </button>
            </h2>
            <div id="collapseEvents" class="accordion-collapse collapse" aria-labelledby="headingEvents" data-bs-parent="#settingsAccordion">
                <div class="accordion-body">
                    <form>
                        <div class="mb-3">
                            <label for="eventTypes" class="form-label">Define Event Types</label>
                            <input type="text" class="form-control" id="eventTypes" placeholder="e.g., Worship Service, Bible Study, Special Event">
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="enableRSVP">
                            <label class="form-check-label" for="enableRSVP">
                                Enable RSVP for Event Attendance
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Donation and Financial Settings -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFinance">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFinance" aria-expanded="false" aria-controls="collapseFinance">
                    Donation and Financial Settings
                </button>
            </h2>
            <div id="collapseFinance" class="accordion-collapse collapse" aria-labelledby="headingFinance" data-bs-parent="#settingsAccordion">
                <div class="accordion-body">
                    <form>
                        <div class="mb-3">
                            <label for="paymentGateway" class="form-label">Select Payment Gateway</label>
                            <select class="form-select" id="paymentGateway">
                                <option value="Flutterwave">Flutterwave</option>
                                <option value="PayPal">PayPal</option>
                                <option value="Stripe">Stripe</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="donationCategories" class="form-label">Define Donation Categories</label>
                            <input type="text" class="form-control" id="donationCategories" placeholder="e.g., Tithes, Offerings, Missions">
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="enableRecurringDonations">
                            <label class="form-check-label" for="enableRecurringDonations">
                                Enable Recurring Donations
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Additional Settings as Needed -->

    </div> <!-- End of Accordion -->
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
