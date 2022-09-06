import { createStore } from "vuex";
import VuexPersist from "vuex-persist";

const vuexPersist = new VuexPersist({
  key: "chatRoom",
  storage: window.localStorage,
});

export default createStore({
  plugins: [vuexPersist.plugin],
  state() {
    return {
      currentRoom: "全頻聊天室",
      messages: [],
      darkMode: false,
      userName: undefined,
    };
  },
  getters: {
    // currentRoom(state){
    //     return state.currentRoom;
    // },
    // messages(state){
    //     return state.messages;
    // },
    // darkMode(state){
    //     return state.darkMode
    // },
    // isAuthorized(state){
    //     return state.userName!==''&&state.userName!==undefined;
    // }
  },
  mutations: {
    // setMessage (state, data) {
    //     state.messages = data;
    // },
    // addMessage (state, data) {
    //     state.messages.push(data);
    // },
    // setCurrentRoom(state, data){
    //     state.currentRoom = data;
    // },
    // setDarkMode(state, data){
    //     state.darkMode = data;
    // },
    // setUserName(state, data){
    //     state.userName = data;
    //     router.push(router.currentRoute.value.query.redirect || '/ChatRoom').catch(() => {});
    // },
    // clearUserName(state){
    //     state.userName = undefined;
    //     router.push('/').catch(() => {});
    // }
  },
});
