import { TicketStatus } from "./ticket-status";
import { Response } from "./response";
import { User } from "../user";

export class Ticket {
  id: number;
  status: TicketStatus;
  responses: Array<Response>;
  createdBy: User;
  createdAt: string;
}