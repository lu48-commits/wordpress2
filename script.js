const form = document.querySelector("#rfqForm");
const note = document.querySelector("#formNote");

form?.addEventListener("submit", (event) => {
  event.preventDefault();

  const data = new FormData(form);
  const subject = encodeURIComponent(`RFQ from ${data.get("name") || "buyer"} - ${data.get("category") || "apparel project"}`);
  const body = encodeURIComponent(
    [
      `Name: ${data.get("name") || ""}`,
      `Business Email: ${data.get("email") || ""}`,
      `Product Category: ${data.get("category") || ""}`,
      `Estimated Quantity: ${data.get("quantity") || ""}`,
      "",
      "Project Details:",
      data.get("details") || ""
    ].join("\n")
  );

  note.textContent = "Opening your email client with the RFQ details.";
  window.location.href = `mailto:sales@leoleofactory.com?subject=${subject}&body=${body}`;
});
