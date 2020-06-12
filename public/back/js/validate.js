 $(document).ready(function(){
 //Automatically close alerts
 window.setTimeout(function () {
    $(".alert").fadeTo(500, 0).slideUp(500, function () {
        $(this).remove();
    });
}, 4000);
//Function to delete Leaders
$(".deleteLeader").click(function () {
    var id = $(this).attr('rel');
    var deleteFunction = $(this).attr('rel1');
    Swal.fire({
        title: 'Are you sure you want to delete this Leader?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#28a745',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
            window.location.href = "/admin/leaders/" + deleteFunction + "/" + id;
                    Swal.fire(
                        'Deleted!',
                        'Leader data has been deleted.',
                        'success'
                      )
        }
    });
});
//Function to delete Churches
$(".deleteBranch").click(function () {
    var id = $(this).attr('rel');
    var deleteFunction = $(this).attr('rel1');
    Swal.fire({
        title: 'Are you sure you want to delete this Church?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#28a745',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
            window.location.href = "/admin/branches/" + deleteFunction + "/" + id;
                    Swal.fire(
                        'Deleted!',
                        'Church data has been deleted.',
                        'success'
                      )
        }
    });
});
//Function to delete Churches
$(".deleteMinistry").click(function () {
    var id = $(this).attr('rel');
    var deleteFunction = $(this).attr('rel1');
    Swal.fire({
        title: 'Are you sure you want to delete this Ministry?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#28a745',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
            window.location.href = "/admin/ministries/" + deleteFunction + "/" + id;
                    Swal.fire(
                        'Deleted!',
                        'Ministry data has been deleted.',
                        'success'
                      )
        }
    });
});
    //Function to delete Categories
$(".deleteCategory").click(function () {
    var id = $(this).attr('rel');
    var deleteFunction = $(this).attr('rel1');
    Swal.fire({
        title: 'Are you sure you want to delete this Category?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#28a745',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
            window.location.href = "/admin/categories/" + deleteFunction + "/" + id;
                    Swal.fire(
                        'Deleted!',
                        'Category data has been deleted.',
                        'success'
                      )
        }
    });
});
//Function to delete Roles
$(".deleteRole").click(function () {
    var id = $(this).attr('rel');
    var deleteFunction = $(this).attr('rel1');
    Swal.fire({
        title: 'Are you sure you want to delete this Role?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#28a745',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
            window.location.href = "/admin/roles/" + deleteFunction + "/" + id;
                    Swal.fire(
                        'Deleted!',
                        'Role data has been deleted.',
                        'success'
                      )
        }
    });
});
})