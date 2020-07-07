import { User } from "../user";
import { CartEntry } from "./cart-entry";

export class Cart {
  id: number;
  user: User;
  entries: Array<CartEntry>;
}