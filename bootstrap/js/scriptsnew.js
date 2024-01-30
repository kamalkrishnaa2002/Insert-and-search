function openGenerateTestModal() {
    document.getElementById('generateTestModal').style.display = 'block';
}

function closeGenerateTestModal() {
    document.getElementById('generateTestModal').style.display = 'none';
}

function addText() {
 
    var inputText = document.querySelector('#generateTestModal input').value;

    if (inputText.trim() !== '') {
        $.ajax({
            type: 'POST',
            url: 'insertData.php',
            data: { inputText: inputText },
            success: function (response) {
                alert(response); 
                closeGenerateTestModal();
            },
            error: function (error) {
                console.error(error);
            }
        });
    } else {
        alert('Please enter valid text.');
    }
}

function searchData() {
    var searchTerm = $("#searchInput").val();

    if (searchTerm.trim() === "") {
        $("#searchResult").html("");
        return;
    }

    $.ajax({
        type: "POST",
        url: "searchData.php",
        data: { search: searchTerm },
        success: function(response) {
            $("#searchResult").html(response);
            $(".result-item").click(function() {
                var id = $(this).data("id");
                showDetails(id);
            });
        }
    });
}


function showDetails(id) {
    $.ajax({
        type: "GET",
        url: "showDetails.php",
        data: { id: id },
        success: function(response) {
            $("#searchResult").html(response);
        }
    });
}