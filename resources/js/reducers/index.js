import {combineReducers} from "redux";
import user from "./user";
import items from "./qiita";

export default combineReducers({user, items});