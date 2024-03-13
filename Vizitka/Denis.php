<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>vi_cho.tyty</title>
  <link rel="stylesheet" href="styleVizitka.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <style>
      @keyframes slideIn {
    0% {
      transform: translateY(100%);
      opacity: 0;
    }
    100% {
      transform: translateY(0);
      opacity: 1;
    }
  }
    header {
      position: sticky;
      top: 0;
      z-index: 999;
      color: rgb(204, 204, 204);
      padding: 2px;
      scrollbar-width: thin;
      scrollbar-color: rgb(12, 12, 12);
      background-color: rgb(0, 0, 0);
    }

    body {
      font-family: 'Courier New', monospace;
      margin: 0;
      padding: 0;
      scroll-behavior: smooth;
      overflow-y: scroll;
      transition: scroll-behavior 15s ease-in-out;
      scrollbar-width: thin;
      scrollbar-color: white;
      background-color: rgb(12, 12, 12);
    }

    .content {
      background-color: rgb(12, 12, 12);
      font-family: 'Courier New', monospace;
      position: sticky;
      top: 0;
      z-index: 999;
      color: rgb(204, 204, 204);
      padding: 20px;
    }

    .InputString {
      background-color: rgb(12, 12, 12);
      font-family: 'Courier New', monospace;
      position: relative;
      top: 0;
      z-index: 999;
      color: rgb(204, 204, 204);
      display: flex;
      align-items: center;
    }

    .InputString .input-prefix {
      color: rgb(204, 204, 204);
    }
.InputString .input-field {
  background: transparent;
  border: none;
  outline: none;
  color: rgb(204, 204, 204);
  font-family: 'Courier New', monospace;
  padding: 0;
  margin: 0;
  width: 400px;
}

.suggestion-list {
  position: absolute; 
  top: 100%; 
  left: 0;
  width: 100%;
  background-color: rgb(0, 0, 0);
  padding: 5px 0;
  list-style: none;
  margin: 0;
  border-radius: 4px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.4);
}

    .suggestion-list li {
      padding: 5px 10px;
      color: rgb(204, 204, 204);
      cursor: pointer;
    }

    .suggestion-list li:hover {
      background-color: rgba(255, 255, 255, 0.1);
    }

    #preloader_malc div {
      width: 300px;
      height: auto;
      line-height: 40px;
      border-radius: 8px;
      font-family: Arial, sans-serif;
      font-size: 15px;
      color: #111;
      text-align: center;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.4);
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: rgba(12, 12, 12, 0.4);
    }
    .preloader_malc {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background-image: url(../resourses/kot.gif);
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  opacity: 0;
  transition: opacity 1s ease-in-out, transform 1s, opacity 1s; 
}

.preloader_malc.show {
  opacity: 1; 
}


.preloader_malc.hide {
  opacity: 0;
  pointer-events: none;
}


    .preloader_malc {
      position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background-image: url(../resourses/kot.gif);
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}


    .progress-bar {
      width: 100%;
      max-width: 400px;
      height: 10px;
      color: rgb(12, 12, 12);
      border-radius: 5px;
      margin-bottom: 10px;
    }

    .progress {
      width: 0;
      height: 100%;
      color: rgb(12, 12, 12);
      border-radius: 5px;
    }

    .loading-text {
      color: rgb(255, 255, 255);
      font-size: 18px;
      font-weight: bold;
    }

    .content,
    header,
    footer {
      display: none;
    }
    .modal {
  display: none;
  position: fixed;
  z-index: 9999;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.4);
  animation: slideIn 0.5s ease-in-out;
}

.modal-content {
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  top: 50%;
  transform: translateY(50%);
  background-color: #fefefe;
  padding: 20px;
  border: 1px solid #888;
  border-radius: 5px;
  max-width: 100%;
  width: 100%;
  overflow: auto;
  animation: slideIn 0.5s ease-in-out forwards;
}



.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
  cursor: pointer;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
@keyframes typing {
  from {
    width: 0;
  }
}

.modal-content.typing-text::after {
  content: "|";
  display: inline-block;
  overflow: hidden;
  vertical-align: bottom;
  animation: typing 0.5s steps(20, end);
  animation-fill-mode: forwards;
}
  </style>

  <script type="text/javascript">
window.addEventListener("load", function() {
  var preloader = document.getElementById("preloader_malc");
  preloader.classList.add("show");
  preloader.style.transform = "translateY(0)";
  var progressBar = preloader.querySelector(".progress-bar .progress");
  var loadingText = preloader.querySelector(".loading-text");
  var content = document.querySelector(".content");
  var header = document.querySelector("header");
  var footer = document.querySelector("footer");
  var progress = 0;

  function slideIn(element) {
    element.style.transform = "translateY(100%)";
    element.style.opacity = 1;
    element.style.transition = "transform 1s, opacity 1s";

    setTimeout(function() {
      element.style.transform = "translateY(0)";
    }, 100);
  }

  var intervalId = setInterval(function() {
    progress += 1;
    progressBar.style.width = progress + "%";
    loadingText.textContent = "Запуск " + progress + "%";

    if (progress >= 100) {
      clearInterval(intervalId);
      preloader.classList.add("hide");

      setTimeout(function() {
        preloader.style.display = "none";
        preloader.classList.remove("show");
        slideIn(content);
      slideIn(header);
      slideIn(footer);
        content.style.display = "block";
        header.style.display = "block";
        footer.style.display = "block";
      }, 1000);
    }
  }, 30);
});

  </script>
</head>
<body>
<header>
  <a href="../image/imagetest.php" target="_blank">
    <img src="../resourses/denisLogo.jpg" alt="котик:)" style="width: 30px; margin-left: 20px;">
  </a>
  <a>https:\vi_cho.tyty228\cmd.exe</a>
  <div style="float: right; margin-right: 20px;">
  <a href="#" id="help "data-toggle="dropdown" data-placement="left" aria-haspopup="true" aria-expanded="false" title="Список команд" data-content="Команда 1, Команда 2, Команда 3 и т.д.">
    ?
  </a>
  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="help">
  <a class="dropdown-item" href="ссылка_1">Личный кабинет</a>
  </div>
</div>
<script>
  $(document).ready(function() {
    // При клике на иконку пользователя
    $('#userIcon').click(function(e) {
      e.preventDefault();
      $('#logoutOption').toggle();
    });
  });
</script>
</header>
<div id="preloader_malc" class="preloader_malc">
  <div>
    <div class="progress-bar">
      <div class="progress"></div>
    </div>
    <p class="loading-text">Запуск 0%</p>
  </div>
</div>
<div class="content">
  <a>Website vi_cho.tyty [Version date 01.07.2023]</a>
  <br>(c) Chernous Denis (My personal creation). Все права защищены.</br>
  <div class="InputString">
    <div class="input-prefix"><br><div id="command-history"></div>https:\vi_cho.tyty228\?dev.php\InputString&gt;<input type="text" class="input-field" required placeholder="Введите необходимую команду" oninput="handleKeyDown(this.value)"></br></div>
    </div>
  </div>
</div>
<div id="modal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <div id="modal-text"></div>
  </div>
</div>

<footer>
  <div class="container">
  </div>
</footer>
<script>
  const commandInput = document.querySelector('.input-field');
  const suggestionList = document.createElement('ul');
  suggestionList.classList.add('suggestion-list');
  const commandHistory = document.getElementById('command-history'); // Элемент для отображения истории команд

  commandInput.addEventListener('input', handleInput);
  commandInput.addEventListener('keydown', handleKeyDown);

  function handleInput(event) {
    const inputValue = event.target.value.trim();
    const suggestions = getMatchingCommands(inputValue);

    renderSuggestions(suggestions);
  }

  function handleKeyDown(event) {
    const key = event.key;
    if (key === 'Enter') {
      const inputValue = commandInput.value.trim();
      executeCommand(inputValue);
      commandInput.value = '';
      suggestionList.innerHTML = '';
      addCommandToHistory(inputValue); // Добавляем введенную команду в историю
    }
  }

  function executeCommand(command) {
    switch (command.toLowerCase()) {
      case 'обо мне':
        showHelp();
        break;
      case 'навыки':
        executeCommand1();
        break;
      case 'портфолио':
        executeCommand2();
        break;
      case 'контакты':
        executeCommand3();
        break;
        case 'о сайте':
          executeCommand4();
        break;
      default:
        unknownCommand();
        break;
    }
  }

  function showHelp() {
  const text = `
    <h4>Немного о разработчике</h4>
    <h5>Всем привет!</h5>
    <h5>Меня зовут Черноус Денис, мне 20 лет и я являюсь начинающим разработчиком в области веб-программирования и разработки ПО</h5>
    <p>На данный момент я окончил 3 курс университета РЭУ им. Г.В.Плеханова на базе среднего проффесионального образования по специальности - программист-техник</p>
    <p>В свободное время увлекюсь спортом, компьютерными играми. Читаю философию, нравится изучать психологию.</p>
    <p>Любимый вид спорта: рукопашный бой</p>
    <p>Любимая компьютерная игра: path of exile</p>
    <p>Любимая книга: Черная риторика (Карстен Бредемайер), Сапиенс (Ной Харари (база(обязательна к прочтению))) </p>
    <img src="../resourses/Denis.png" style="width:200px;">
  `;
  showModal(text);
}

  function executeCommand1() {
    showModal('Тут будет текстТут будет текстТут будет текстТут будет текстТут будет текстТут будет текстТут будет текстТут будет текстТут будет текстТут будет текстТут будет текстТут будет текстТут будет текстТут будет текстТут будет текстТут будет текстТут будет текстТут будет текстТут будет текст');
  }

  function executeCommand2() {
    showModal('Тут будет текстТут будет текстТут будет текстТут будет текстТут будет текстТут будет текстТут будет текстТут будет текстТут будет текстТут будет текстТут будет текстТут будет текстТут будет текстТут будет текстТут будет текст');
  }

  function executeCommand3() {
    const text = `
    <h4>Связаться с разработчиком</h4>
    <p>Вы можете написать мне в вк или телеграмм:<a href="https://vk.com/vi_cho_tyty" target="_blank"><img src="../resourses/vk.png" alt="вк:)" style="width: 30px;"></a><a href="https://t.me/blissya" target="_blank"><img src="../resourses/telegram.png" alt="телега:)" style="width: 30px; margin-left="30px""></a></p>
    <p>Или можете просто связаться со мной по почте: denis.chernous.96@mail.ru</p>
    <p>Буду рад пообщаться!</p>
  `;
    showModal(text);
  }
  function executeCommand4() {
  const text = `
    <h4>Почему такой стиль</h4>
    <p>Те кто знают тот знает...</p>
    <p>Во-первых, Марк Твен сказал: "Нет более жалкого зрелища, чем человек, объясняющий свою шутку"</p>
    <p>Тут та же история...</p>
    <p>Задумка такова: это командная строка. Раньше, в различных фильмах, было принято изображать программистов и "хакеров", как таких людей, которые сидят за ноутбуком или компьютером и пишут какие то команды в командной строке. На деле же этим мало кто пользуется и в основном для работы с операционной системой. Это типа и шутка и прикол и ахаха и задумка есть вот.</p>
    <img src="../resourses/my-cat-was-hacking.gif" style="width:200px;">
    `;
  showModal(text);
}
  function unknownCommand() {
    showModal('Такой команды еще не существует');
  }

function showModal(text) {
  const modal = document.getElementById('modal');
  const modalText = document.getElementById('modal-text');
  modalText.innerHTML = '';

  animateTypingText(text, modalText);

  modal.style.display = 'block';
}

function animateTypingText(text, targetElement) {
  let i = 0;
  let currentText = '';
  const typingInterval = setInterval(() => {
    if (i < text.length) {
      const char = text.charAt(i);

      if (char === '<') {
        const closingIndex = text.indexOf('>', i);
        const tag = text.substring(i, closingIndex + 1);
        currentText += tag;
        targetElement.innerHTML = currentText;
        i = closingIndex;
      } else {
        currentText += char;
        targetElement.innerHTML = currentText;
      }

      i++;
    } else {
      clearInterval(typingInterval);
    }
  }, 10);
}

document.addEventListener('click', function (event) {
  const modal = document.getElementById('modal');
  const closeIcon = document.querySelector('.close');
  
  if (event.target === modal || event.target === closeIcon) {
    modal.style.display = 'none';
  }
});

function getMatchingCommands(inputValue) {
    const commands = ['Обо мне', 'Навыки', 'Портфолио', 'Контакты', 'О сайте'];

    if (!inputValue) return commands;

    const matchingCommands = commands.filter((command) =>
      command.toLowerCase().startsWith(inputValue.toLowerCase())
    );

    return matchingCommands;
}

function renderSuggestions(suggestions) {
    suggestionList.innerHTML = '';

    suggestions.forEach((suggestion) => {
      const suggestionItem = document.createElement('li');
      suggestionItem.textContent = suggestion;
      suggestionItem.addEventListener('click', () => {
        commandInput.value = suggestion;
        suggestionList.innerHTML = '';
      });

      suggestionList.appendChild(suggestionItem);
    });

    if (suggestions.length > 0) {
      commandInput.parentNode.appendChild(suggestionList);
    } else {
      suggestionList.remove();
    }
  }

  document.addEventListener('click', (event) => {
    const target = event.target;
    if (
      !target.closest('.InputString') &&
      !target.closest('.suggestion-list')
    ) {
      suggestionList.remove();
    }
  });

  function addCommandToHistory(command) {
    const commandItem = document.createElement('div');
    commandItem.textContent = `https:\\vi_cho.tyty228\\?dev.php\\InputString>${command}`;
    commandHistory.appendChild(commandItem);
  }
</script>

</body>
</html>
