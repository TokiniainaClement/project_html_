$(document).ready(() => {
  show();

  function show() {
    $.ajax({
      url: "../rooter.php?action=show_student",
      type: "post",
      dataType: "json",
      success: (data) => {
        let thead = `
                <thead class="thead-dark">
                    <tr>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Status</th>
                    <th>Actions</th>
                    </tr>
                </thead>
                <tbody>`;

        for (let dt in data) {
          thead += `
            <tr>
                <td>${data[dt].student_name}</td>
                <td>${data[dt].course}</td>
                <td>${data[dt].student_status}</td>
                <td><a href="#" class="btn">View</a></td>
            </tr>
            `;
        }
        $("#dataTable").html("</tbody>" + thead);
      },
      error: () => {
        alert("ERREUR DE CONNEXION AU SERVER :-(");
      },
    });
  }
});
