import { Ticket } from "./ticket";
import { User } from "../user";

export class Response {
  id: number;
  ticket?: Ticket;
  createdBy: User;
  createdAt: string;
}