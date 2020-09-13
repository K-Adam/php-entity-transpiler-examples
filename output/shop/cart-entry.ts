import { Product } from "../product";
import { Cart } from "./cart";

export class CartEntry {
  id: number = 0;
  product: Product;
  cart?: Cart;
  count: number = 0;
}