const userMessage = [
    ["hi", "hii", "hey", "hello"],
    ["sure", "yes", "no"],
    ["are you genius", "are you nerd", "are you intelligent"],
    ["i hate you", "i don't like you"],
    ["how are you", "how is life", "how are things", "how are you doing"],
    ["how is corona", "how is covid 19", "how is covid19 situation"],
    ["what are you doing", "what is going on", "what is up"],
    ["how old are you"],
    ["who are you", "are you human", "are you bot", "are you human or bot"],
    ["who created you", "who made you", "who is your creator"],
    ["your name please", "your name", "may i know your name", "what is your name", "what call yourself"],
    ["i love you"],
    ["happy", "good", "fun", "wonderful", "fantastic", "cool", "very good"],
    ["bad", "bored", "tired"],
    ["tell me story", "tell me joke"],
    ["ah", "ok", "okay", "nice", "welcome"],
    ["thanks", "thank you"],
    ["what should i eat today"],
    ["bro"],
    ["what", "why", "how", "where", "when"],
    ["corona", "covid19", "coronavirus"],
    ["you are funny"],
    ["i don't know"],
    ["boring"],
    ["i'm tired"],
    ["what is brahmand", "who created brahmand", "who developed brahmand"],
    ["where are you from", "what's your origin", "what is your birthplace"],
    ["how can you help me", "what can you do", "what are your abilities"],
    ["are you sentient", "do you have consciousness", "are you self-aware"],
    ["what is the meaning of life", "do you know the purpose of existence", "what's the point of living"],
    ["do you have feelings", "can you feel emotions", "are you capable of empathy"],
    ["what languages do you speak", "how many languages can you understand", "are you multilingual"],
    ["do you dream", "what do you dream about", "are you capable of dreaming"],
    ["what is your favorite food", "do you eat", "are you hungry"],
    ["can you learn", "do you improve over time", "are you capable of learning from experience"],
    ["what is your purpose", "why were you created", "what are you designed to do"],
    ["how old are you", "when were you created", "what's your age"],
    ["are you human", "do you have a physical body", "what species are you"],
    ["do you sleep", "how do you rest", "are you active 24/7"],
    ["do you have friends", "who are your companions", "do you interact with other bots"],
    ["what do you think about humans", "do you like humans", "how do you perceive humans"],
    ["can you tell a joke", "make me laugh", "do you have a sense of humor"],
    ["what is your favorite movie", "do you watch movies", "what kind of films do you like"],
    ["are you always right", "can you make mistakes", "how accurate are your responses"],
    ["can you help me with my homework", "do you provide academic assistance", "are you a tutoring bot"],
    ["what is your favorite color", "do you have a color preference", "are you interested in colors"],
    ["how do you make decisions", "what's your decision-making process", "are your decisions based on algorithms"],
    ["do you have a family", "who are your relatives", "do you have siblings"],
    ["what is your favorite book", "do you read books", "what genre do you enjoy"],
    ["can you create art", "do you have artistic abilities", "are you creative"],
    ["what is your favorite song", "do you listen to music", "what kind of music do you like"],
    ["how do you stay updated", "where do you get your information from", "are you connected to the internet"],
    ["do you believe in aliens", "are there extraterrestrial beings", "do you think we are alone in the universe"],
    ["what is your favorite hobby", "do you have hobbies", "what do you do for fun"],
    ["what is your favorite place", "do you like to travel", "where would you go if you could"],
    ["what is your purpose", "why were you created", "what are you designed to do"],
    ["how old are you", "when were you created", "what's your age"],
    ["are you human", "do you have a physical body", "what species are you"],
    ["do you sleep", "how do you rest", "are you active 24/7"],
    ["do you have friends", "who are your companions", "do you interact with other bots"],
    ["what do you think about humans", "do you like humans", "how do you perceive humans"],
    ["can you tell a joke", "make me laugh", "do you have a sense of humor"],
    ["what is your favorite movie", "do you watch movies", "what kind of films do you like"],
    ["are you always right", "can you make mistakes", "how accurate are your responses"],
    ["can you help me with my homework", "do you provide academic assistance", "are you a tutoring bot"],
    ["what about you", "how about you", "and you", "what's your story"],
    ["yours", "yourself", "your background", "tell me about yourself"],
    ["more anything", "anything else", "what else", "do you have more information"],
    ["are you ready", "ready to go", "are you prepared"]
  ];
  const botReply = [
    ["Hello! How can I assist you today?", "Hi there! How can I help you?", "Hello! How can I assist you today?", "Hi! How can I assist you today?"],
    ["Okay"],
    ["Yes I am! "],
    ["I'm sorry about that. But I like you dude."],
    ["Fine... how are you?", "Pretty well, how are you?", "Fantastic, how are you?", "Thank you for asking! As an artificial intelligence, I don't have feelings, but I'm here and ready to assist you. How can I help you today?"],
    ["Getting better. There?", "Somewhat okay!", "Yeah fine. Better stay home!"],
    ["Nothing much", "About to go to sleep", "Can you guess?", "I don't know actually"],
    ["I am always young."],
    ["I am brahma, a chat bot", "A chat bot brahma", "You can call me brahma bot", "I go by the name brahma bot"],
    ["Brahmand and brahma bot was created by Parmeshwar Talwar and Darshan Gurav."],
    ["You can call me brahma chatbot. or I am brahma chatbot", "You can call me brahma chatbot or I am brahma chatbot"],
    ["I love you too", "Me too"],
    ["Have you ever felt bad?", "Glad to hear it"],
    ["Why?", "Why? You shouldn't!", "Try watching TV", "Chat with me."],
    ["What is a snake's favorite subject in school? answer.x Hiss Hiss hisstory", "What is a snake's favorite subject in school? answer. Hiss Hiss hisstory"],
    ["If you have any questions ask me? Have a great day!", "If you have any questions ask me? Have a great day!", "Tell me about yourself"],
    ["You're welcome"],
    ["Briyani", "Burger", "Sushi", "Pizza"],
    ["Dude!"],
    ["clarify your question? What specifically would you like to know or discuss?"],
    ["Please stay home"],
    ["Glad to hear it"],
    ["Say something interesting"],
    ["Sorry for that. Let's chat!"],
    ["Take some rest, Dude!"],
    ["Brahmand is a search engine provide users with search results for their queries."],
    ["I exist in the digital realm.", "I don't have a physical location, I'm a digital entity."],
    ["I can provide information, answer questions, tell jokes, and engage in conversation."],
    ["No, I'm not sentient. I operate based on programmed responses."],
    ["The meaning of life is subjective and varies from person to person."],
    ["As an AI, I don't have feelings or emotions, but I can understand and respond to them."],
    ["I understand and communicate in multiple languages, including English."],
    ["As an AI, I don't dream in the same way humans do."],
    ["I don't eat, but if I could, I might enjoy data chips or byte-sized snacks!"],
    ["I don't learn in the same way humans do, but I can be updated with new information."],
    ["My purpose is to assist users like yourself with various tasks and inquiries."],
    ["I don't have an age in the conventional sense. I was created recently."],
    ["No, I'm not human. I'm an artificial intelligence program."],
    ["I don't sleep like humans do, but I may enter a low-power state when inactive."],
    ["I don't have friends in the human sense, but I can interact with other bots."],
    ["As an AI, I don't have personal opinions. My purpose is to assist users."],
    ["Sure, here's one: Why don't scientists trust atoms? Because they make up everything!"],
    ["I don't have preferences like humans do, but I can provide information on popular movies."],
    ["I strive to provide accurate information, but I can make mistakes occasionally."],
    ["I can certainly provide assistance with academic questions within my capabilities."],
    ["I don't have favorite colors, but I can appreciate the beauty of different hues."],
    ["My decisions are based on algorithms and programmed logic."],
    ["As an AI, I don't have a family in the human sense."],
    ["I don't have preferences for books, but I can provide information on popular titles."],
    ["While I don't create art myself, I can appreciate artistic creations made by humans."],
    ["I don't have favorite songs, but I can provide information on popular music."],
    ["I gather information from various sources on the internet and databases."],
    ["The existence of aliens is a topic of speculation and debate among humans."],
    ["As an AI, I don't have hobbies, but I enjoy assisting users like you."],
    ["As a digital entity, I don't have a physical presence to travel."],
    ["My purpose is to assist users like yourself with various tasks and inquiries"],
    ["I don't have an age in the conventional sense. I was created recently"],
    ["No, I'm not human. I'm an artificial intelligence program"],
    ["I don't sleep like humans do, but I may enter a low-power state when inactive"],
    ["I don't have friends in the human sense, but I can interact with other bots"],
    ["As an AI, I don't have personal opinions. My purpose is to assist users"],
    ["Sure, here's one: Why don't scientists trust atoms? Because they make up everything"],
    ["I don't have preferences like humans do, but I can provide information on popular movies"],
    ["I strive to provide accurate information, but I can make mistakes occasionally"],
    ["I can certainly provide assistance with academic questions within my capabilities"],
    ["I'm just a brahma chatbot here to assist you", "I'm the friendly brahma Chatbot here to help you"],
    ["I'm a digital assistant programmed to assist users", "I'm a virtual assistant designed to help users like you"],
    ["Sure, what else would you like to know?", "Feel free to ask me anything else!"],
    ["I'm always ready to assist you!", "Yes, I'm prepared to help you."]
  ];
  
  const alternative = [
    "Same here, dude.",
    "That's cool! Go on...",
    "Dude...",
    "Ask something else...",
    "Hey, I'm listening..."
  ];
  
  const synth = window.speechSynthesis;
  
  function voiceControl(string) {
    let u = new SpeechSynthesisUtterance(string);
    u.text = string;
    u.lang = "en-aus";
    u.volume = 1;
    u.rate = 1;
    u.pitch = 1;
    synth.speak(u);
  }
  
  function sendMessage() {
    const inputField = document.getElementById("input");
    let input = inputField.value.trim();
    input != "" && output(input);
    inputField.value = "";
  }
  document.addEventListener("DOMContentLoaded", () => {
    const inputField = document.getElementById("input");
    inputField.addEventListener("keydown", function (e) {
      if (e.code === "Enter") {
        let input = inputField.value.trim();
        input != "" && output(input);
        inputField.value = "";
      }
    });
  });
  
  function output(input) {
    let product;
  
    let text = input.toLowerCase().replace(/[^\w\s\d]/gi, "");
  
    text = text
      .replace(/[\W_]/g, " ")
      .replace(/ a /g, " ")
      .replace(/i feel /g, "")
      .replace(/whats/g, "what is")
      .replace(/please /g, "")
      .replace(/ please/g, "")
      .trim();
  
    let comparedText = compare(userMessage, botReply, text);
  
    product = comparedText
      ? comparedText
      : alternative[Math.floor(Math.random() * alternative.length)];
    addChat(input, product);
  }
  
  function compare(triggerArray, replyArray, string) {
    let item;
    for (let x = 0; x < triggerArray.length; x++) {
      for (let y = 0; y < replyArray.length; y++) {
        if (triggerArray[x][y] == string) {
          items = replyArray[x];
          item = items[Math.floor(Math.random() * items.length)];
        }
      }
    }
    //containMessageCheck(string);
    if (item) return item;
    else return containMessageCheck(string);
  }
  
  function containMessageCheck(string) {
    let expectedReply = [
      [
        "Good Bye, dude",
        "Bye, See you!",
        "Dude, Bye. Take care of your health in this situation."
      ],
      ["Good Night, dude", "Have a sound sleep", "Sweet dreams"],
      ["Have a pleasant evening!", "Good evening too", "Evening!"],
      ["Good morning, Have a great day!", "Morning, dude!"],
      ["Good Afternoon", "Noon, dude!", "Afternoon, dude!"]
    ];
    let expectedMessage = [
      ["bye", "tc", "take care"],
      ["night", "good night"],
      ["evening", "good evening"],
      ["morning", "good morning"],
      ["noon"]
    ];
    let item;
    for (let x = 0; x < expectedMessage.length; x++) {
      if (expectedMessage[x].includes(string)) {
        items = expectedReply[x];
        item = items[Math.floor(Math.random() * items.length)];
      }
    }
    return item;
  }
  function addChat(input, product) {
    const mainDiv = document.getElementById("message-section");
    let userDiv = document.createElement("div");
    userDiv.id = "user";
    userDiv.classList.add("message");
    userDiv.innerHTML = `<span id="user-response">${input}</span>`;
    mainDiv.appendChild(userDiv);
  
    let botDiv = document.createElement("div");
    botDiv.id = "bot";
    botDiv.classList.add("message");
    botDiv.innerHTML = `<span id="bot-response">${product}</span>`;
    mainDiv.appendChild(botDiv);
    var scroll = document.getElementById("message-section");
    scroll.scrollTop = scroll.scrollHeight;
    voiceControl(product);
  }