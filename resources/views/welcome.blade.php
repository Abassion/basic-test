<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Basic Select Option</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="DisplayedText" id="myDiv">
</div>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md text-primary">
            <select required id="sel">
                <option value=""
                        hidden
                >Choose an animal to adopt
                </option>
                <option value="1">cat</option>
                <option value="2">Dog</option>
                <option value="3">turtle</option>
                <option value="4">squirrel</option>
                <option value="5">Bird</option>
            </select>
            <script>
                var displayArray = [];
                var optionSelection = document.getElementById("sel");
                var displayedValue = document.getElementById("myDiv");

                optionSelection.addEventListener("change", addItem);

                function displayElements() {
                    let displayString = "";
                    for (let i = 0; i < displayArray.length; i++) {
                        let element = displayArray[i];
                        displayString += `<span class="displayed-element" data-index="${i}">  ${element} </span>`;
                    }
                    displayedValue.innerHTML = displayString;
                    addDeleteListeners();
                }

                function addDeleteListeners() {
                    let displayedElements = document.querySelectorAll(".displayed-element");
                    for (let element of displayedElements) {
                        element.addEventListener("click", function () {
                            return deleteItem(this.dataset.index)
                        });
                    }
                }

                function addItem() {
                    const selectedText = optionSelection.options[optionSelection.selectedIndex];
                    displayArray.push(selectedText.text);
                    displayElements();
                }

                function deleteItem(index) {
                    displayArray.splice(index, 1);
                    displayElements();
                };
            </script>
        </div>
    </div>
</div>

<style>
    body {
        font-family: 'Nunito', sans-serif;
    }

    html, body {
        font-family: 'Nunito', sans-serif;
        background-color: #7C8363;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 50vh;

    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;

    }

    .position-ref {
        position: relative;

    }

    .content {
        text-align: center;

    }

    .title {
        font-size: 84px;
    }

    select {
        border: 3px solid #31473A;
        background-color: #Edf4f2;
        border-radius: 0;
        font-weight: 400;
        color: inherit;
        padding: 11px;
        line-height: normal;
    }

    .DisplayedText {
        color: aliceblue;
        font-family: 'Times New Roman', Times, serif;
        font-weight: bold;
        text-align: center;
        font-size: 150px;
        margin-top: 100px;
    }
</style>
</body>
</html>
