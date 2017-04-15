using System;
using System.Collections.Generic;
using System.Data;
using System.Data.Entity;
using System.Linq;
using System.Net;
using System.Web;
using System.Web.Mvc;
using Coinsways.Entities;

namespace Coinsways.Areas.Admin.Controllers
{
    public class TransactionDetailController : Controller
    {
        private CoinswaysDbEntities db = new CoinswaysDbEntities();

        // GET: /Admin/TransactionDetail/
        public ActionResult Index()
        {
            var transactiondetails = db.TransactionDetails.Include(t => t.ComissionType).Include(t => t.PaymentMode).Include(t => t.PlanDetail).Include(t => t.TransactionStatu).Include(t => t.TypeOfTransaction).Include(t => t.UserDetail);
            return View(transactiondetails.ToList());
        }

        // GET: /Admin/TransactionDetail/Details/5
        public ActionResult Details(long? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            TransactionDetail transactiondetail = db.TransactionDetails.Find(id);
            if (transactiondetail == null)
            {
                return HttpNotFound();
            }
            return View(transactiondetail);
        }

        // GET: /Admin/TransactionDetail/Create
        public ActionResult Create()
        {
            ViewBag.CommissionTypeID = new SelectList(db.ComissionTypes, "Id", "Details");
            ViewBag.PayModeID = new SelectList(db.PaymentModes, "Id", "Name");
            ViewBag.PlanID = new SelectList(db.PlanDetails, "Id", "Name");
            ViewBag.TransactionStatusID = new SelectList(db.TransactionStatus, "ID", "Details");
            ViewBag.TypeOfTransactionID = new SelectList(db.TypeOfTransactions, "ID", "Details");
            ViewBag.UserID = new SelectList(db.UserDetails, "UserId", "Name");
            return View();
        }

        // POST: /Admin/TransactionDetail/Create
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Create([Bind(Include="ID,UserID,CreditAmount,DebitAmount,PaymentDate,PlanID,PayModeID,TypeOfTransactionID,PaymentReferencialDetails,OtherDetails,TransactionStatusID,IsActive,CommissionTypeID")] TransactionDetail transactiondetail)
        {
            if (ModelState.IsValid)
            {
                db.TransactionDetails.Add(transactiondetail);
                db.SaveChanges();
                return RedirectToAction("Index");
            }

            ViewBag.CommissionTypeID = new SelectList(db.ComissionTypes, "Id", "Details", transactiondetail.CommissionTypeID);
            ViewBag.PayModeID = new SelectList(db.PaymentModes, "Id", "Name", transactiondetail.PayModeID);
            ViewBag.PlanID = new SelectList(db.PlanDetails, "Id", "Name", transactiondetail.PlanID);
            ViewBag.TransactionStatusID = new SelectList(db.TransactionStatus, "ID", "Details", transactiondetail.TransactionStatusID);
            ViewBag.TypeOfTransactionID = new SelectList(db.TypeOfTransactions, "ID", "Details", transactiondetail.TypeOfTransactionID);
            ViewBag.UserID = new SelectList(db.UserDetails, "UserId", "Name", transactiondetail.UserID);
            return View(transactiondetail);
        }

        // GET: /Admin/TransactionDetail/Edit/5
        public ActionResult Edit(long? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            TransactionDetail transactiondetail = db.TransactionDetails.Find(id);
            if (transactiondetail == null)
            {
                return HttpNotFound();
            }
            ViewBag.CommissionTypeID = new SelectList(db.ComissionTypes, "Id", "Details", transactiondetail.CommissionTypeID);
            ViewBag.PayModeID = new SelectList(db.PaymentModes, "Id", "Name", transactiondetail.PayModeID);
            ViewBag.PlanID = new SelectList(db.PlanDetails, "Id", "Name", transactiondetail.PlanID);
            ViewBag.TransactionStatusID = new SelectList(db.TransactionStatus, "ID", "Details", transactiondetail.TransactionStatusID);
            ViewBag.TypeOfTransactionID = new SelectList(db.TypeOfTransactions, "ID", "Details", transactiondetail.TypeOfTransactionID);
            ViewBag.UserID = new SelectList(db.UserDetails, "UserId", "Name", transactiondetail.UserID);
            return View(transactiondetail);
        }

        // POST: /Admin/TransactionDetail/Edit/5
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Edit([Bind(Include="ID,UserID,CreditAmount,DebitAmount,PaymentDate,PlanID,PayModeID,TypeOfTransactionID,PaymentReferencialDetails,OtherDetails,TransactionStatusID,IsActive,CommissionTypeID")] TransactionDetail transactiondetail)
        {
            if (ModelState.IsValid)
            {
                db.Entry(transactiondetail).State = EntityState.Modified;
                db.SaveChanges();
                return RedirectToAction("Index");
            }
            ViewBag.CommissionTypeID = new SelectList(db.ComissionTypes, "Id", "Details", transactiondetail.CommissionTypeID);
            ViewBag.PayModeID = new SelectList(db.PaymentModes, "Id", "Name", transactiondetail.PayModeID);
            ViewBag.PlanID = new SelectList(db.PlanDetails, "Id", "Name", transactiondetail.PlanID);
            ViewBag.TransactionStatusID = new SelectList(db.TransactionStatus, "ID", "Details", transactiondetail.TransactionStatusID);
            ViewBag.TypeOfTransactionID = new SelectList(db.TypeOfTransactions, "ID", "Details", transactiondetail.TypeOfTransactionID);
            ViewBag.UserID = new SelectList(db.UserDetails, "UserId", "Name", transactiondetail.UserID);
            return View(transactiondetail);
        }

        // GET: /Admin/TransactionDetail/Delete/5
        public ActionResult Delete(long? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            TransactionDetail transactiondetail = db.TransactionDetails.Find(id);
            if (transactiondetail == null)
            {
                return HttpNotFound();
            }
            return View(transactiondetail);
        }

        // POST: /Admin/TransactionDetail/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirmed(long id)
        {
            TransactionDetail transactiondetail = db.TransactionDetails.Find(id);
            db.TransactionDetails.Remove(transactiondetail);
            db.SaveChanges();
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
