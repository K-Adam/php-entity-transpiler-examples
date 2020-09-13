import { TicketStatus } from "./ticket-status";
import { Response } from "./response";
import { User } from "../user";
import { DateTime } from "../utils/date-time";

export class Ticket {
  id: number = 0;
  status: TicketStatus;
  responses: Array<Response> = [];
  createdBy: User;
  createdAt: DateTime;
}