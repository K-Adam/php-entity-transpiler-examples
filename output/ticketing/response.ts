import { Ticket } from "./ticket";
import { User } from "../user";
import { DateTime } from "../utils/date-time";

export class Response {
  id: number;
  ticket?: Ticket;
  createdBy: User;
  createdAt: DateTime;
}