import { ProductStatus } from "./product-status";

export class Product {
  id: number;
  title: string;
  description: string;
  price: number;
  status: ProductStatus;
}