<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="modal fade" id="recipeTrashModal" aria-labelledby="recipeTrashModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title h5" id="recipeTrashModal">
                        Recipe Title
                    </h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Recipe Title will Delete.</p>
                    <p>Are you sure?</p>
                </div>
                <div class="modal-footer">
                    <form action="">
                        @method('DELETE')
                        @csrf

                        <button type="button" class="btn btn-sub" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-main">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
