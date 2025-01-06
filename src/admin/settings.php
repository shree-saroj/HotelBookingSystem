<?php require "./../../Inc/essentials.php";
validateAdminLogin();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel - Dashboard</title>
  <?php require "./../../Inc/links.php"; ?>
</head>

<body class="bg-light">
  <?php require "./../../Inc/admin_header.php"; ?>

  <div class="container-flud overflow-hidden" id="main-content">
    <div class="row">
      <div class="col-lg-10 ms-auto p-4">
        <h3 class="mb-4">SETTINGS</h3>
        <!-- GENERAL SETTING SECTION -->
        <div class="card border-0 shadow-sm mb-4">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h5 class="card-title m-0">GENERAL SETTINGS</h5>
              <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#generalEditModal">
                <i class="bi bi-pencil-square"></i> Edit
              </button>
            </div>
            <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
            <p class="card-text" id="siteTitle"></p>
            <h6 class="card-subtitle mb-1 fw-bold">About Us</h6>
            <p class="card-text" id="siteAbout"></p>
          </div>
        </div>
        <!-- GENERAL SETTING MODAL -->
        <div class="modal fade" id="generalEditModal" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="generalEditModal" aria-hidden="true">
          <div class="modal-dialog">
            <form id="generalEditModalForm">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">General Settings</h5>
                </div>
                <div class="modal-body">
                  <div class="mb-3">
                    <label class="form-label fw-bold">Site Title</label>
                    <input name="siteTitle" type="text" class="form-control shadow-none" required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label fw-bold">About Us</label>
                    <textarea name="siteAbout" class="form-control shadow-none" rows="6" style="resize: none;" required></textarea>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                  <button type="submit" id="editGeneral" class="btn custom-bg text-white shadow-none">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>

        <!-- SHUTDOWN SECTION -->
        <div class="card border-0 shadow-sm mb-4">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h5 class="card-title m-0">SHUTDOWN WEBSITE</h5>
              <div class="form-check form-switch">
                <form>
                  <input class="form-check-input shadow-none" type="checkbox" id="shutdownWebsite">
                  <label class="form-check-label">SHUTDOWN</label>
                </form>
              </div>
            </div>
            <p class="card-text" id="siteTitle">NO CUSTOMERS WILL BE ALLOWED TO BOOK HOTEL ROOM WHEN SHUTDOWN MODE IS TURNED ON</p>
          </div>
        </div>

        <!-- CONTACTS DETAILS SECTION -->
        <div class="card border-0 shadow-sm mb-4">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h5 class="card-title m-0">CONTACTS SETTINGS</h5>
              <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#contactEditModal">
                <i class="bi bi-pencil-square"></i> Edit
              </button>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="mb-4">
                  <h6 class="card-subtitle mb-1 fw-bold">Address</h6>
                  <p class="card-text" id="address"></p>
                </div>
                <div class="mb-4">
                  <h6 class="card-subtitle mb-1 fw-bold">Google Map</h6>
                  <p class="card-text" id="gmap"></p>
                </div>
                <div class="mb-4">
                  <h6 class="card-subtitle mb-1 fw-bold">Phone Numbers</h6>
                  <p class="card-text mb-1">
                    <i class="bi bi-telephone-inbound-fill me-1"></i>
                    <span class="contactNumbers"></span>
                  </p>
                  <p>
                    <i class="bi bi-telephone-inbound-fill me-1"></i>
                    <span class="contactNumbers"></span>
                  </p>
                </div>
                <div class="mb-4">
                  <h6 class="card-subtitle mb-1 fw-bold">E-Mail</h6>
                  <p class="card-text" id="email"></p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="mb-4">
                  <h6 class="card-subtitle mb-1 fw-bold">Social Links</h6>
                  <p class="card-text mb-1">
                    <i class="bi bi-twitter-x me-1"></i>
                    <span class="socials"></span>
                  </p>
                  <p class="card-text mb-1">
                    <i class="bi bi-instagram me-1"></i>
                    <span class="socials"></span>
                  </p>
                  <p class="card-text">
                    <i class="bi bi-facebook me-1"></i>
                    <span class="socials"></span>
                  </p>
                </div>
                <div class="mb-4">
                  <h6 class="card-subtitle mb-1 fw-bold">iFrame Links</h6>
                  <iframe id="iframe" class="border p-2 w-100" loading="lazy"></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- CONTACT SETTING MODAL -->
        <div class="modal fade" id="contactEditModal" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="contactEditModal" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <form id="contactEditModalForm">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Contacts Settings</h5>
                </div>
                <div class="modal-body">
                  <div class="container-fluid p-0">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label fw-bold">Address</label>
                          <input name="setAddress" type="text" class="form-control shadow-none" required>
                        </div>
                        <div class="mb-3">
                          <label class="form-label fw-bold">Googlge Map Link</label>
                          <input name="setGMapLink" type="text" class="form-control shadow-none" required>
                        </div>
                        <div class="mb-3">
                          <label class="form-label fw-bold">Phone Numbers (with county code)</label>
                          <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-telephone-inbound-fill"></i></span>
                            <input name="setPhoneNumber" type="text" class="form-control shadow-none" required>
                          </div>
                          <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-telephone-inbound-fill"></i></span>
                            <input type="text" name="setPhoneNumber" class="form-control shadow-none" required>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label fw-bold">E-Mail</label>
                          <input name="setEmail" type="email" class="form-control shadow-none" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label fw-bold">Social Links</label>
                          <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi bi-twitter-x"></i></span>
                            <input name="setSocialLinks" type="text" class="form-control shadow-none">
                          </div>
                          <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-instagram"></i></span>
                            <input type="text" name="setSocialLinks" class="form-control shadow-none" required>
                          </div>
                          <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-facebook"></i></span>
                            <input type="text" name="setSocialLinks" class="form-control shadow-none">
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label fw-bold">IFrame Src</label>
                          <input name="setIFrameLink" type="text" class="form-control shadow-none" required>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                  <button type="submit" id="editContact" class="btn custom-bg text-white shadow-none">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>

        <!-- MANAGEMENT TEAM SECTION -->
        <div class="card border-0 shadow-sm mb-4">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h5 class="card-title m-0">MANAGEMENT TEAM</h5>
              <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#teamAddUpdateModal">
                <i class="bi bi-plus-square"></i> Add
              </button>
            </div>
            <div class="row" id="team-data"></div>
          </div>
        </div>

        <!-- MANAGEMENT TEAM MODAL -->
        <div class="modal fade" id="teamAddUpdateModal" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="teamAddUpdateModal" aria-hidden="true">
          <div class="modal-dialog">
            <form id="teamAddUpdateModalModalForm">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Add Team Memeber</h5>
                </div>
                <div class="modal-body">
                  <div class="mb-3">
                    <label class="form-label fw-bold">Name:</label>
                    <input name="memberName" id="memberName" type="text" class="form-control shadow-none" required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label fw-bold">Picture:</label>
                    <input name="memberPicture" id="memberPicture" type="file" accept=".jpg, .png, .webp, .jpeg" class="form-control shadow-none" required>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                  <button type="submit" id="editGeneral" class="btn custom-bg text-white shadow-none">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <?php require "./../../Inc/scripts.php"; ?>
  <script type="text/javascript">
    function getGeneralData() {
      let generalData = '';
      let siteTitle = document.getElementById('siteTitle');
      let stieAbout = document.getElementById('siteAbout');
      let shutdownToggle = document.getElementById('shutdownWebsite');
      let xhr = new XMLHttpRequest();
      xhr.open("POST", "./../../Inc/ajax/settings_crud.php", true);
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhr.onload = function() {
        generalData = JSON.parse(this.responseText);
        siteTitle.innerText = generalData.siteTitle;
        stieAbout.innerText = generalData.siteAbout;
        if (generalData.shutdown == 0) {
          shutdownToggle.checked = false;
          shutdownToggle.value = 0;
        } else {
          shutdownToggle.checked = true;
          shutdownToggle.value = 1;
        }
      }
      xhr.send("getGeneralData");
    }

    window.onload = function() {
      getGeneralData();
      getContactsData();
    }

    document.getElementById('generalEditModal').addEventListener('show.bs.modal', function(event) {
      document.getElementsByName('siteTitle')[0].value = document.getElementById('siteTitle').innerText;
      document.getElementsByName('siteAbout')[0].value = document.getElementById('siteAbout').innerText;
    });

    function updateGeneralData() {
      let siteTitleFromModal = document.getElementsByName('siteTitle')[0].value;
      let stieAboutFromModal = document.getElementsByName('siteAbout')[0].value;
      let xhr = new XMLHttpRequest();
      xhr.open("POST", "./../../Inc/ajax/settings_crud.php", true);
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhr.onload = function() {
        if (this.responseText > 0) {
          showAlert("success", "Changes Saved");
          getGeneralData();
        } else {
          showAlert("error", "No Changes Saved");
        }
      }
      xhr.send("siteTitleFromModal=" + siteTitleFromModal + "&stieAboutFromModal=" + stieAboutFromModal + "&updateGeneralData");
    }

    document.getElementById('generalEditModalForm').addEventListener('submit', function(event) {
      event.preventDefault();
      updateGeneralData();
      let editGeneralModal = bootstrap.Modal.getInstance(document.getElementById('generalEditModal'));
      editGeneralModal.toggle();
    });

    function shutdownWebsite() {
      let status = document.getElementById('shutdownWebsite').checked ? 1 : 0;
      let xhr = new XMLHttpRequest();
      xhr.open("POST", "./../../Inc/ajax/settings_crud.php", true);
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhr.onload = function() {
        if (this.responseText != "") {
          getGeneralData();
          showAlert("success", "Status Of Site Shutdown Has Been Changed");
        } else {
          showAlert("error", "Error While Shutting Down The Site");
        }
      }
      xhr.send("status=" + status + "&shutdownWebsite");
    }

    document.getElementById('shutdownWebsite').addEventListener('change', function() {
      shutdownWebsite();
    });

    function getContactsData() {
      let contactData = '';
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "./../../Inc/ajax/settings_crud.php", true);
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhr.onload = function() {
        var contactData = JSON.parse(this.responseText);
        var phoneNumber = JSON.parse(contactData.phone);
        var socialsData = JSON.parse(contactData.socials);
        document.getElementById('address').innerText = contactData.address;
        document.getElementById('gmap').innerText = contactData.gmap;
        document.getElementsByClassName('contactNumbers')[0].innerText = phoneNumber.PhoneOne;
        document.getElementsByClassName('contactNumbers')[1].innerText = phoneNumber.PhoneTwo;
        document.getElementById('email').innerText = contactData.email;
        document.getElementsByClassName('socials')[0].innerText = socialsData.x;
        document.getElementsByClassName('socials')[1].innerText = socialsData.instagram;
        document.getElementsByClassName('socials')[2].innerText = socialsData.facebook;
        document.getElementById('iframe').src = contactData.iframe;
      }
      xhr.send("getContactsData");
    }

    document.getElementById('contactEditModal').addEventListener('show.bs.modal', function(event) {
      document.getElementsByName('setAddress')[0].value = document.getElementById('address').innerText;
      document.getElementsByName('setGMapLink')[0].value = document.getElementById('gmap').innerText;
      document.getElementsByName('setPhoneNumber')[0].value = document.getElementsByClassName('contactNumbers')[0].innerText;
      document.getElementsByName('setPhoneNumber')[1].value = document.getElementsByClassName('contactNumbers')[1].innerText;
      document.getElementsByName('setEmail')[0].value = document.getElementById('email').innerText;
      document.getElementsByName('setSocialLinks')[0].value = document.getElementsByClassName('socials')[0].innerText;
      document.getElementsByName('setSocialLinks')[1].value = document.getElementsByClassName('socials')[1].innerText;
      document.getElementsByName('setSocialLinks')[2].value = document.getElementsByClassName('socials')[2].innerText;
      document.getElementsByName('setIFrameLink')[0].value = document.getElementById('iframe').src;
    });

    function updateContactData() {
      let setAddress = document.getElementsByName('setAddress')[0].value;

      let setGMapLink = document.getElementsByName('setGMapLink')[0].value;

      let stieAboutFromModal = document.getElementsByName('setGMapLink')[0].value;

      let setPhoneNumber = JSON.stringify({
        "PhoneOne": document.getElementsByName('setPhoneNumber')[0].value,
        "PhoneTwo": document.getElementsByName('setPhoneNumber')[1].value,
      });

      let setEmail = document.getElementsByName('setEmail')[0].value;

      let setSocialLinks = JSON.stringify({
        "x": document.getElementsByName('setSocialLinks')[0].value,
        "instagram": document.getElementsByName('setSocialLinks')[1].value,
        "facebook": document.getElementsByName('setSocialLinks')[2].value
      });

      let setIFrameLink = document.getElementsByName('setIFrameLink')[0].value;

      let sendCommand = "setAddress=" + setAddress + "&setGMapLink=" + setGMapLink + "&setPhoneNumber=" + setPhoneNumber + "&setEmail=" + setEmail + "&setSocialLinks=" + setSocialLinks + "&setIFrameLink=" + setIFrameLink + "&updateContactsData";
      let xhr = new XMLHttpRequest();
      xhr.open("POST", "./../../Inc/ajax/settings_crud.php", true);
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhr.onload = function() {
        if (this.responseText > 0) {
          showAlert("success", "Changes Saved Successfully");
          getContactsData();
        } else {
          showAlert("error", "Error Occured While Saving Changes");
        }
      }
      console.log(sendCommand);
      xhr.send(sendCommand);
    }

    document.getElementById('contactEditModalForm').addEventListener('submit', function(event) {
      event.preventDefault();
      updateContactData();
      let editContactModal = bootstrap.Modal.getInstance(document.getElementById('contactEditModal'));
      editContactModal.toggle();
    });

    document.getElementById('teamAddUpdateModalModalForm').addEventListener('submit', function(event) {
      event.preventDefault();
      addMember();
      let addUpdateTeamModal = bootstrap.Modal.getInstance(document.getElementById('teamAddUpdateModal'));
      addUpdateTeamModal.toggle();
      document.getElementById('memberName').value = '';
      document.getElementById('memberPicture').value = '';
    });

    function addMember() {
      let dataImage = new FormData();
      dataImage.append('memberPicture', document.getElementById('memberName').value);
      dataImage.append('picture', document.getElementById('memberPicture').files[0]);
      dataImage.append('addMember', '');

      let xhr = new XMLHttpRequest();
      xhr.open("POST", "./../../Inc/ajax/settings_crud.php", true);

      xhr.onload = function() {
        if (this.responseText == 'inv_img') {
          showAlert('error', 'Invalid Image Format');
        } else if (this.responseText == 'inv_size') {
          showAlert('error', 'Image Size is Too Large');
        } else if (this.responseText == 'upload_failed') {
          showAlert('error', 'Image Upload Failed');
        } else {
          showAlert('success', 'Member Added Successfully');
        }
      }

      xhr.send(dataImage);
    }
  </script>

</body>

</html>