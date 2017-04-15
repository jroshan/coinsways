using System;
using System.Collections.Generic;
using System.Data;
using System.Data.Entity;
using System.Linq;
using System.Threading.Tasks;
using System.Net;
using System.Web;
using System.Web.Mvc;
using Coinsways.Entities;

namespace Coinsways.Areas.Admin.Controllers
{
    public class HelpDeskController : Controller
    {
        private CoinswaysDbEntities db = new CoinswaysDbEntities();

        // GET: Admin/HelpDesk
        public async Task<ActionResult> Index()
        {
            var helpDeskQueries = db.HelpDeskQueries.Include(h => h.HelpType).Include(h => h.UserDetail);
            return View(await helpDeskQueries.ToListAsync());
        }

        // GET: Admin/HelpDesk/Edit/5
        public async Task<ActionResult> Edit(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            HelpDeskQuery helpDeskQuery = await db.HelpDeskQueries.FindAsync(id);
            if (helpDeskQuery == null)
            {
                return HttpNotFound();
            }
            ViewBag.HelpTypeId = new SelectList(db.HelpTypes, "ID", "Name", helpDeskQuery.HelpTypeId);
            ViewBag.UserId = new SelectList(db.UserDetails, "UserId", "Name", helpDeskQuery.UserId);
            return View(helpDeskQuery);
        }

        // POST: Admin/HelpDesk/Edit/5
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public async Task<ActionResult> Edit([Bind(Include = "Id,UserId,HelpTypeId,Message,IsActive,CreatedDate")] HelpDeskQuery helpDeskQuery)
        {
            if (ModelState.IsValid)
            {
                db.Entry(helpDeskQuery).State = EntityState.Modified;
                await db.SaveChangesAsync();
                return RedirectToAction("Index");
            }
            ViewBag.HelpTypeId = new SelectList(db.HelpTypes, "ID", "Name", helpDeskQuery.HelpTypeId);
            ViewBag.UserId = new SelectList(db.UserDetails, "UserId", "Name", helpDeskQuery.UserId);
            return View(helpDeskQuery);
        }

        // GET: Admin/HelpDesk/Delete/5
        public async Task<ActionResult> Delete(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            HelpDeskQuery helpDeskQuery = await db.HelpDeskQueries.FindAsync(id);
            if (helpDeskQuery == null)
            {
                return HttpNotFound();
            }
            return View(helpDeskQuery);
        }

        // POST: Admin/HelpDesk/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public async Task<ActionResult> DeleteConfirmed(int id)
        {
            HelpDeskQuery helpDeskQuery = await db.HelpDeskQueries.FindAsync(id);
            db.HelpDeskQueries.Remove(helpDeskQuery);
            await db.SaveChangesAsync();
            return RedirectToAction("Index");
        }

        protected override void Dispose(bool disposing)
        {
            if (disposing)
            {
                db.Dispose();
            }
            base.Dispose(disposing);
        }
    }
}
