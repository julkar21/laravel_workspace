jQuery(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    showAllCategories();
    jQuery(".addCategory").click(function () {
        handleAddCategory();
    });
    jQuery(document).on("click", ".editCategory", function () {
        let id = jQuery(this).val();
        handleEditItem(id);
    });
    jQuery(".updateCategoryBtn").click(function () {
        handleUpdateCategory();
    });
    jQuery(document).on("click", ".deleteCategory", function () {
        let id = jQuery(this).val();
        handleDeleteItem(id);
    });
    jQuery(".confirmDeleteBtn").click(function () {
        handleConfirmDelete();
    });
});

function handleAddCategory() {
    var name = jQuery(".name").val();
        var description = jQuery(".description").val();
        var tag = jQuery(".tag").val();
        var status = jQuery(".status").val();
        $.ajax({
            url : 'addcategory',
            type: 'POST',
            datatype: 'json',
            data:{
                'name':name,
                'description':description,
                'tag':tag,
                'status':status
            },
            success : function(result){
                if(result.status=="failed"){
                    jQuery(".nameError").text(result.errors.name);
                    jQuery(".descriptionError").text(result.errors.description);
                    jQuery(".tagError").text(result.errors.tag);
                }else{
                    jQuery(".msg").append('<div class="alert alert-success">'+result.message+'</div');
                    jQuery(".msg").fadeOut(5000);
                    jQuery("#addCategory").modal('hide');
                    jQuery("#addCategory").find('input').val('');
                    jQuery("#addCategory").find('textarea').val('');
                    showAllCategories();
                }
            }
        })
}

function showAllCategories() {
    $.ajax({
        url: "showcategory",
        type: "GET",
        dataType: "JSON",
        success: function (result) {
            jQuery(".tbody").html("");
            let sl = 1;
            $.each(result.payload, function (key, item) {
                jQuery(".tbody").append(`<tr>
                <td>${sl++}</td>
                <td>${item.name}</td>
                <td>${item.description}</td>
                <td>${item.tag}</td>
                <td>${item.status == 1 ? "Active" : "Inactive"}</td>
                <td><button class="btn btn-info editCategory" value="${
                    item.id
                }"><i class="fa fa-edit"></i></button>
                    <button class="btn btn-danger deleteCategory" value="${
                        item.id
                    }"><i class="fa fa-trash"></i></button>
                </td>
                </tr>`);
            });
        },
    });
}

function handleEditItem(id) {
    $.ajax({
        url: "editCategory/" + id,
        type: "GET",
        dataType: "JSON",
        success: function (result) {
            jQuery("#categoryId").val(result.payload.id);
            jQuery("#categoryName").val(result.payload.name);
            jQuery("#categoryDescription").val(
                result.payload.description
            );
            jQuery("#categoryTags").val(result.payload.tag);
            if ((result.payload.status = 1)) {
                jQuery(".activeStatus").text("Active");
                jQuery(".activeStatus").val(result.payload.status);
            } else {
                jQuery(".activeStatus").text("Inctive");
                jQuery(".activeStatus").val(result.payload.status);
            }
        },
    });
    jQuery("#editCategoryModal").modal("show");
}

function handleUpdateCategory() {
    let categoryId = jQuery("#categoryId").val();
    let categoryName = jQuery("#categoryName").val();
    let categoryDescription = jQuery("#categoryDescription").val();
    let categoryTags = jQuery("#categoryTags").val();
    let categoryStatus = jQuery("#categoryStatus").val();

    $.ajax({
        url: "updateCategory/" + categoryId,
        type: "POST",
        dataType: "JSON",
        data: {
            categoryName: categoryName,
            categoryDescription: categoryDescription,
            categoryTags: categoryTags,
            categoryStatus: categoryStatus,
        },
        success: function (result) {
            if (result.status == "failed") {
                if (result.errors.categoryName) {
                    jQuery(".errorCategoryName").text(
                        result.errors.categoryName
                    );
                } else {
                    jQuery(".errorCategoryName").text("");
                }
                if (result.errors.categoryDescription) {
                    jQuery(".errorCategoryDescription").text(
                        result.errors.categoryDescription
                    );
                } else {
                    jQuery(".errorCategoryDescription").text("");
                }
                if (result.errors.categoryTags) {
                    jQuery(".errorCategoryTags").text(
                        result.errors.categoryDescription
                    );
                } else {
                    jQuery(".errorCategoryTags").text("");
                }
            } else {
                jQuery("#editCategoryModal").modal("hide");
                jQuery("#editCategoryModal").find("input").val("");
                jQuery("#editCategoryModal").find("textarea").val("");
                jQuery(".successMsg").append(
                    "<span class='alert alert-success'>Category Updated Successfully<span>"
                );
                jQuery(".successMsg").fadeOut(3000);
                showAllCategories();
            }
        },
        error: function (xhr) {
            console.log(xhr.responseText);
        },
    });
}

function handleDeleteItem(id) {
    jQuery("#deleteCategoryId").val(id);
    jQuery("#deleteCategoryModal").modal("show");
}

function handleConfirmDelete() {
    let id = jQuery("#deleteCategoryId").val();
    $.ajax({
        url: "deleteCategory/" + id,
        type: "GET",
        dataType: "JSON",
        success: function (result) {
            jQuery("#deleteCategoryModal").modal("hide");
            jQuery("#deleteCategoryModal").find("input").val("");
            if (result.status == "success") {
                jQuery(".successMsg").html("");
                jQuery(".successMsg").append(
                    "<span class='alert alert-success'>Category Deleted Successfully<span>"
                );

                jQuery(".successMsg").fadeIn(1000);
                jQuery(".successMsg").fadeOut(1000);
                showAllCategories();
            }
        },
    });
}
