function analyzeText() {
  let text = document.getElementById("textInput").value;

  let characters = text.length;

  let words = 0;
  let trimmedText = text.trim();

  if (trimmedText !== "") {
    words = trimmedText.split(/\s+/).length;
  }

  let reversed = text.split("").reverse().join("");

  document.getElementById("charCount").innerText = characters;
  document.getElementById("wordCount").innerText = words;

  if (trimmedText === "") {
    document.getElementById("reverseText").innerText = "No text entered";
  } else {
    document.getElementById("reverseText").innerText = reversed;
  }
}