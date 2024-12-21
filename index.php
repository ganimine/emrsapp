<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Telangana Eklavya Model Residential Schools Society</h1>
        <h2>(తెలంగాణ ఎకలవ్య ఆదర్శ గిరిజన విద్యాలయాల సంస్థ)</h2>
    </header>

    <main>
        <h2>OUTSOURCING TEACHING STAFF RECUITMENT IN EMRS,KHAMMAM REGION</h2>
        <form action="process.php" method="post">
            <!-- Personal Information -->
            <fieldset>
                <legend>Personal Information</legend>
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required><br><br>

                <label for="father_name">Father's Name:</label>
                <input type="text" id="father_name" name="father_name" required><br><br>

                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required><br><br>

                <label for="community">Community:</label>
                <select id="community" name="community" required>
                    <option value="SC">SC</option>
                    <option value="ST">ST</option>
                    <option value="BC">BC</option>
                    <option value="OC">OC</option>
                </select><br><br>

                <label for="address">Address:</label>
                <textarea id="address" name="address" rows="4" required></textarea><br><br>

                <label for="mobile">Mobile Number:</label>
                <input type="tel" id="mobile" name="mobile" required><br><br>
            </fieldset>

            <!-- Academic Qualifications -->
            <fieldset>
                <legend>Academic Qualifications</legend>
                <table>
                    <tr>
                        <th>Degree</th>
                        <th>Max Marks</th>
                        <th>Secured Marks</th>
                        <th>Percentage</th>
                    </tr>
                    <tr>
                        <td>Undergraduate (UG)</td>
                        <td><input type="number" name="ug_max_marks" required></td>
                        <td><input type="number" name="ug_secured_marks" required></td>
                        <td><input type="text" name="ug_percentage" readonly></td>
                    </tr>
                    <tr>
                        <td>Postgraduate (PG)</td>
                        <td><input type="number" name="pg_max_marks" required></td>
                        <td><input type="number" name="pg_secured_marks" required></td>
                        <td><input type="text" name="pg_percentage" readonly></td>
                    </tr>
                </table>
            </fieldset>

            <!-- Professional Qualifications -->
            <fieldset>
                <legend>Professional Qualifications</legend>
                <table>
                    <tr>
                        <th>Qualification</th>
                        <th>Max Marks</th>
                        <th>Secured Marks</th>
                        <th>Percentage</th>
                    </tr>
                    <tr>
                        <td>B.Ed</td>
                        <td><input type="number" name="bed_max_marks" required></td>
                        <td><input type="number" name="bed_secured_marks" required></td>
                        <td><input type="text" name="bed_percentage" readonly></td>
                    </tr>
                    <tr>
                        <td>M.Ed</td>
                        <td><input type="number" name="med_max_marks" required></td>
                        <td><input type="number" name="med_secured_marks" required></td>
                        <td><input type="text" name="med_percentage" readonly></td>
                    </tr>
                    <tr>
                        <td>TET</td>
                        <td><input type="number" name="tet_max_marks" required></td>
                        <td><input type="number" name="tet_secured_marks" required></td>
                        <td><input type="text" name="tet_percentage" readonly></td>
                    </tr>
                </table>
            </fieldset>

            <!-- Experience -->
            <fieldset>
                <legend>Experience (if any)</legend>
                <table>
                    <tr>
                        <th>Organization Name</th>
                        <th>Designation</th>
                        <th>Employment Type</th>
                        <th>From Date</th>
                        <th>To Date</th>
                        <th>Remarks</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="org_name[]"></td>
                        <td><input type="text" name="designation[]"></td>
                        <td>
                            <select name="employment_type[]">
                                <option value="Full-Time">Full-Time</option>
                                <option value="Part-Time">Part-Time</option>
                            </select>
                        </td>
                        <td><input type="date" name="from_date[]"></td>
                        <td><input type="date" name="to_date[]"></td>
                        <td><input type="text" name="remarks[]"></td>
                    </tr>
                </table>
                <button type="button" onclick="addExperienceRow()">Add More</button>
            </fieldset>

            <br>
            <button type="submit">Submit Application</button>
        </form>
    </main>

    <script>
        // JavaScript to dynamically add rows for experience
        function addExperienceRow() {
            const table = document.querySelector('fieldset table');
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td><input type="text" name="org_name[]"></td>
                <td><input type="text" name="designation[]"></td>
                <td>
                    <select name="employment_type[]">
                        <option value="Full-Time">Full-Time</option>
                        <option value="Part-Time">Part-Time</option>
                    </select>
                </td>
                <td><input type="date" name="from_date[]"></td>
                <td><input type="date" name="to_date[]"></td>
                <td><input type="text" name="remarks[]"></td>
            `;
            table.appendChild(newRow);
        }
    </script>
</body>
</html>
