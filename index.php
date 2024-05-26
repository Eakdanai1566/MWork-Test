<?php
  require("PHP/access.php");
  $acc = new Access();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Neo Echo Funeral</title>
    <link rel="stylesheet" href="CSS/indexcss.css">
    <style>
      .form-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
      }
      .form-container form {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 300px;
      }
      .form-container label,
      .form-container input {
        width: 100%;
        margin-bottom: 10px;
      }
      .form-container input[type="submit"] {
        width: auto;
      }
    </style>
  </head>
  <body>
    <div>
      <table style="border-collapse: collapse; width: 75%;" border="1" align="center">
        <tbody>
          <tr>
            <td class="banner">
              Banner
            </td>
          </tr>
          <tr style="height: 50px;">
            <td>
              <nav class="NavContainer">
                <ul class="NavLeft">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="leavelist.php">Leave List</a></li>
                </ul>
              </nav>
            </td>
          </tr>
        </tbody>
      </table>
      <table style="border-collapse: collapse; width: 75%;" border="1" align="center">
        <tbody>
          <tr>
            <td class="body1">
              <table style="border-collapse: collapse" border="1" align="center" class="profpic">
                <tbody>
                  <tr>
                    <td class="Banner">
                      <!-- Placeholder for the Banner in body1 -->
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
            <td class="body2">
              <!-- Start of the form in body2 -->
              <div class="form-container">
                <form action="/PHP/submit.php" method="post" onsubmit="return validateForm()">
                  <label for="firstname">First Name:</label>
                  <input type="text" id="firstname" name="firstname" required>

                  <label for="lastname">Last Name:</label>
                  <input type="text" id="lastname" name="lastname" required>

                  <label for="position">Position:</label>
                  <input type="text" id="position" name="position">

                  <label for="email">E-Mail:</label>
                  <input type="text" id="email" name="email">

                  <label for="number">Phone Number:</label>
                  <input type="text" id="number" name="number">

                  <label for="type">Leave Type:</label>
                  <select id="type" name="type" required>
                    <option value="sick">Sick Leave</option>
                    <option value="business">Vacation Leave</option>
                    <option value="vacation">Maternity Leave</option>
                    <option value="other">Other</option>
                  </select>

                  <label for="reason">Reason:</label>
                  <input type="text" id="reason" name="reason" required>

                  <label for="startdat">Start Date:</label>
                  <input type="date" id="startdat" name="startdat" required>

                  <label for="enddat">End Date:</label>
                  <input type="date" id="enddat" name="enddat" required>

                  <label for="subdate">Submit Date:</label>
                  <input type="date" id="subdate" name="subdate" required>

                  <input type="submit" value="Submit">
                </form>
              </div>

              <script>
                function toggleReasonField() {
                  var typeSelect = document.getElementById("type");
                  var reasonField = document.getElementById("reasonField");
                  if (typeSelect.value === "other") {
                    reasonField.style.display = "block";
                    document.getElementById("reason").required = true;
                  } else {
                    reasonField.style.display = "none";
                    document.getElementById("reason").required = false;
                  }
                }

                function validateForm() {
                  var startDate = new Date(document.getElementById("startdat").value);
                  var endDate = new Date(document.getElementById("enddat").value);
                  var submitDate = new Date(document.getElementById("subdate").value);
                  var leaveType = document.getElementById("type").value;

                  if (submitDate.toDateString() !== new Date().toDateString()) {
                    alert("Submit date must be the same day as today.");
                    return false;
                  }

                  if (leaveType === "business" && (endDate - startDate) > 2 * 24 * 60 * 60 * 1000) {
                    alert("For vacation leave, you cannot leave more than 2 days consecutively.");
                    return false;
                  }

                  var threeDaysBefore = new Date(startDate);
                  threeDaysBefore.setDate(threeDaysBefore.getDate() - 3);
                  if (submitDate > threeDaysBefore) {
                    alert("You need to submit 3 days before the leave.");
                    return false;
                  }

                  return true;
                }
              </script>
              <!-- End of the form in body2 -->
            </td>
            <td class="body3">
              <!-- Placeholder for body3 -->
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </body>
</html>
