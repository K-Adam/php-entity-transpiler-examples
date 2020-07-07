import { Response } from "./response";
import { TicketStatus } from "./ticket-status";

export class ResponseStatusChange extends Response {
  newStatus: TicketStatus;
}