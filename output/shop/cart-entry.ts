import { Cart } from "./cart";

export class CartEntry {
  id: number;
  cart?: Cart;
  count: number;
}